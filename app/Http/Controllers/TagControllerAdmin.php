<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admins.tags.index_tag', ['tags'=>\App\Tag::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.tags.create_tag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'name' => 'required|min:2|max:25|unique:tags',
            'slug' => 'required|min:2|max:25|unique:tags',
        ]);
        
        $tag=new \App\Tag();
        $tag->name=$validatedData['name'];
        $tag->slug=$validatedData['slug'];
        $tag->save();

        return redirect()->route('tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admins.tags.update_tag', ['tag'=>$tag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $validatedData=$request->validate([
            'name' => 'required|min:2|max:25|unique:tags,name,'.$tag->id,
            'slug' => 'required|min:2|max:25|unique:tags,slug,'.$tag->id,
        ]);

        $tag->name=$validatedData['name'];
        $tag->slug=$validatedData['slug'];
        $tag->save();

        //dd('@@@@@@@@@');
        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index');
    }
}
