<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\meal;
use App\Models\mealType;
use App\Models\resturent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewController extends Controller
{
    //
    public function index(){
        return view('index')
        ->with('restaurants',resturent::all())
        ->with('locations',resturent::distinct('city')->pluck('city'))
        ->with('categories',category::all())
        ->with('meals',meal::all())
        ->with('mealtype',mealType::all());
        
    }
    public function res()
    {
        $resturent = resturent::where('name','like', '%'.request('search').'%')->get();
        return view('results')->with('restaurants',$resturent)
        ->with('tilte','Result : '.request('search'))
        ->with('query',request('search'))
        ->with('categories',category::all())
        ->with('meals',meal::all())
        ->with('mealtype',mealType::all());
    }
    public function category($id)
    {
        $category = Category::find($id);
        return view('category.show')->with('category', $category)
        ->with('categories',category::all())
        ->with('meals',meal::all())
        ->with('mealtype',mealType::all());
    }
    public function menu($id)
    {
        $resturent = resturent::find($id)->first();
        return view('menu')
        ->with('resturant', $resturent)
        ->with('meals', meal::where('restaurant_id',$id)->get())
        ->with('categories',category::all());
    }

}

