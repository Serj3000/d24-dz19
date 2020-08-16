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
        // echo '<br>'.\Request::ip().'<br>';
        // echo '<br>'.var_dump(\Request::capture()).'<br>';
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

        //dd($request->all(), $request->input(), $request->method(),$request->ip(),$request->segments(), $request->capture());
        
        // $request->flash('requ');

        // // Метод pluck() извлекает все значения по заданному ключу
        //dd(\App\Tag::all()->pluck('id')->toArray());
        //dd(implode(",", \App\Tag::all()->pluck('id')->toArray()), $request->input("post-tag"));
        // return response()->view('admins.posts.create_post');

        // $data=$request->input();
        // dd($data);

        //$data=$request->input("post-tag");
        //dd($data);

        $validatedData = $request->validate([
        'autor-id'=>'required|numeric|exists:App\User,id',
        'category-id'=>'required|numeric|exists:App\Category,id',
        'post-title' => 'required|min:2|max:255',
        'post-preview_text'=>'max:255',
        'post-body' => 'max:100000',
        // 'post-tag.*'=>'in:implode(",", \App\Tag::all()->pluck("id")->toArray())',
        ]);

        //$request->flash();
        //Request::flashOnly('autor-id', 'category-id');

        $post = new \App\Post();
        $post->user_id = $validatedData['autor-id'];
        $post->category_id = $validatedData['category-id'];
        $post->title = $validatedData['post-title'];
        $post->preview_text = $validatedData['post-title'];
        $post->image = 1;
        $post->body = $validatedData['post-body'];
        $post->saw = 0;
        
        // $post->save();
        $post->push();

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
    public function edit(\App\Post $post)
    {
        return view('admins.posts.update_post', ['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
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
