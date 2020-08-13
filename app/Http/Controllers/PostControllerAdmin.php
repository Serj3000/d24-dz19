<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admins.posts.index_post', [
            'posts'=>\App\Post::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.posts.create_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// //--------------------------------------------------------------------
        // $validatedData = $request->validate([
        // 'user_id'=>'required|numeric',
        // 'category_id'=>'required|numeric',
        // 'title' => 'required|min:5|max:255',
        // 'preview_text'=>'max:255',
        // 'body' => 'max:100000',
        // ]);

        // $post = new \App\Post();
        // $post->user_id = $validatedData['user_id'];
        // $post->category_id = $validatedData['category_id'];
        // $post->title = $validatedData['title'];
        // $post->preview_text = $validatedData['preview_text'];
        // $post->image = 1;
        // $post->body = $validatedData['body'];
        // $post->saw = 0;
        
        // $post->save();
// //--------------------------------------------------------------------

        $validatedData = $request->validate([
        'autor_id'=>'required|numeric',
        'category_id'=>'required|numeric',
        'post_title' => 'required|min:2|max:255',
        'post_preview_text'=>'max:255',
        'post_body' => 'max:100000',
        ]);

        $post = new \App\Post();
        $post->user_id = $validatedData['autor_id'];
        $post->category_id = $validatedData['category_id'];
        $post->title = $validatedData['post_title'];
        $post->preview_text = $validatedData['post_title'];
        $post->image = 1;
        $post->body = $validatedData['post_body'];
        $post->saw = 0;
        
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Post $post)
    {
        echo($post->title);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
