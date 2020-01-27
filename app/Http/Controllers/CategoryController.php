<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
class CategoryController extends Controller
{
    public function index() {
        return view('dashboard.category');
    }
    public function store(Request $request) {
        
        $this->validate($request,[

            'name' => 'required',

            ]);
            $category = new Category();
            $category->name = $request->name;
            if($category->save()) {

                Session::flash('message', 'category is added successfully');
            }
            else {

                Session::flash('message', 'Error while adding category');
            }
            return redirect()->back();
    }
}
