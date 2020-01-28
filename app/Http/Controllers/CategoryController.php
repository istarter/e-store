<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('dashboard.category')->with('categories', $categories);
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
    public function edit(Category $category) {
        
        // dd($category);
        return view('dashboard.edit')->with('category', $category);
    }
    public function update(Category $category) {
        $category->update($this->validatedData());     
        return redirect()->route('index');   
    }

    public function destroy(Category $category) {

        $category->delete();
        return redirect()->route('index');
    }
}
