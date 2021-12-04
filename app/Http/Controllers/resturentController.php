<?php

namespace App\Http\Controllers;

use App\Models\resturent;
use App\Models\category;
use Illuminate\Http\Request;
use App\Models\mealType;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Storage;
use File;

class resturentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getresturent(Request $rr)
    {

        try {
            $r = new mealType();
            $r->name = $rr->name;

            $r->save();
            return $r;
        } catch (\Exception $e) {

            return response("interal error", $e);
        }

        return $rr;
    }
    public function page(Request $r)
    {
        $length = $r->get('length');
        $start = $r->get('start');
        $search = $r->get('search');
        $data = resturent::select('*')
            ->where('name', 'like', '%' . $search['value'] . '%')
            ->skip($start)
            ->take($length)->get();
        $arr = array();
        foreach ($data as $d) {
            $cat_name = category::find($d->category_id)->name;
            $arr[] = array(
                'name' => $d->name,
                'description' => $d->description,
                'category' => $cat_name,
                'action' => "<a href='resturnt/" . $d->id . "/edit' class='btn btn-success'><i class='fas fa-edit'></i> Edit</a>
			
			 <a href='resturnt/" . $d->id . "/deleted'  class='btn btn-danger'><i class='fas fa-trash'></i> Delete </a>
		
			  
			 "
            );
        }
        $total_members = resturent::count();

        $count = DB::select("select * from resturents where name like '%" . $search['value'] . "%'");
        $recordsFiltered = count($count);
        $data = array(

            'recordsTotal' => $total_members,
            'recordsFiltered' => $recordsFiltered,
            'data' => $arr,
        );

        echo json_encode($data);
    }

    public function index()
    {


        return view('resturent.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = category::all();
        return view("resturent.create", ["category" => $cat]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'name' => 'required|unique:resturents',


        ]);
        $resturent = new resturent();
        $resturent->name = $request->name;
        $resturent->description = $request->description;
        $resturent->phone = $request->phone;
        $resturent->city = $request->city;
        $resturent->address = $request->address;
        $resturent->duration = $request->duration;
        $resturent->category_id = $request->category_id;

        if($request->hasFile('image')){
            $featured = $request->image;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('storage/resturent/',$featured_new_name);

            $resturent->image = 'storage/resturent/'.$featured_new_name;
        }

        $resturent->save();

        return redirect()->route("resturnt.index");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resturent  $resturent
     * @return \Illuminate\Http\Response
     */
    public function show(resturent $resturent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resturent  $resturent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resturent = resturent::find($id);
        $cat = category::all();
        return view("resturent.edit", ['category' => $cat, "resturent" => $resturent]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resturent  $resturent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $resturent = resturent::find($id);
        $resturent->name = $request->name;
        $resturent->description = $request->description;
        $resturent->phone = $request->phone;
        $resturent->city = $request->city;
        $resturent->address = $request->address;
        $resturent->duration = $request->duration;
        $resturent->category_id = $request->category_id;
        if($request->hasFile('image')){
            $featured = $request->image;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('storage/resturent/',$featured_new_name);

            $resturent->image = 'storage/resturent/'.$featured_new_name;
        }

        $resturent->save();

        return redirect()->route("resturnt.index");

        //
    }
    public function deleted($id)
    {
        $resturent = resturent::find($id);
        $resturent->delete();
        return redirect()->route("resturnt.index");

        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resturent  $resturent
     * @return \Illuminate\Http\Response
     */
    public function destroy(resturent $resturent)
    {
        //
    }

}
