<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admins.categories.list_category',['categories'=>\App\Category::all()]);
    }

    public function create()
    {
        return view('admins.categories.create_category');
    }

    public function store(Request $request)
    {
        // // Через объект Request мы можем обратится к полям нашей формы переданной из метода create() контроллера CategoryController
        //dd($request->name, $request->slug);
        
        $category=new \App\Category();
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->save();

        //return redirect()->action('CategoryController@index');
        return redirect()->route('categories.index');
    }

    public function show()
    {
        
    }

    public function edit(\App\Category $category)
    {
        
    }

    public function update(\App\Category $category)
    {
        
    }

    public function destroy(\App\Category $category)
    {
       $category->delete();
       return redirect()->route('categories.index');
    }
}
