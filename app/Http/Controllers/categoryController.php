<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	public function catList(Request $request)
    {   
	 
        $start = $request->get('start');
        $length = $request->get('length');
		//dd($length);
		$search_arr = $request->get('search');
		 $searchValue = $search_arr['value'];
	$records = category::select('*')
		->where('name', 'like', '%' . $searchValue . '%')
		->skip($start)
       ->take($length)
       ->get();

     $data_arr = array();
     
     foreach($records as $record){
      
        $name = $record->name;
       $description = $record->description;
        $data_arr[] = array(
         
          "name" => $name,
		    "description" => $description,
          "action"=>"<a class='btn btn-success' href=category/".$record->id."/edit>Edit</a>
		   <a href='category/".$record->id."/deleted'  class='btn btn-danger'><i class='fas fa-trash'></i> Delete </a>
		
		  "
       
        );
     }
		$total_members=category::count();
		
        $data = array(
          
            'recordsTotal' => $total_members,
            'recordsFiltered' => $total_members,
            'data' => $data_arr,
        );

        echo json_encode($data);
    }

    
    public function index()
    {
		$category=category::all();
		return view('category.index',['category'=>$category]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		$this->validate($request,[
		'name'=>'required|unique:categories',
		'description'=>'required',
		]);
        category::create($request->all());
		
		return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
		return view("category.edit",["category"=>$category]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
		
		$category->name=$request->name;
		$category->description=$request->description;
		$category->save();
		return redirect()->route("category.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
	   public function deleted($id)
    {
		$category=category::find($id);
		$category->delete();
		return redirect()->route("category.index");
		
        //
    }

}
