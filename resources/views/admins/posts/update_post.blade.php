<h2>Post Update</h2>
<h3>location: "~views/admins/posts/update_post.blade.php"</h3>
<nav>
<a href="{{route('index.blog')}}"> hillel-24 </a> | 
<a href="{{route('posts.index')}}"> Index (List) </a> | 
<a href="{{route('posts.create')}}"> Create </a>
</nav>
<hr>
<br>
{{-- {{dd($post)}} --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <p>Error:</p>
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{route('posts.update', ['post'=>$post->id])}}" id="update-posts-form">
@method('PUT')
    <p>Autor:</p>
        {{-- <select name="autor-id" form="posts-form">
            @foreach(\App\User::all() as $autor)
                <option value="{{$autor->id}}">{{$autor->name}}</option>
            @endforeach
        </select> --}}
        <input type="text" name="update-post-autor" value="{{$post->user->name}}">

    <p>Category name:</p>
        {{-- <select name="category-id" form="update-posts-form">
        @foreach(\App\Category::all() as $category)
            <option value="{{$category->id}}" @if($category->id==old('$category->id')) selected @endif>{{$category->name}}</option>
        @endforeach
        </select> --}}
        <input type="text" name="update-post-category" value="{{$post->category->name}}">

    <p>Post title:</p>
        <p><textarea rows="1" cols="60" name="post-title" wrap="soft" autofocus>{{$post->title}}</textarea></p>
    
    <p>Preview text:</p>
        <p><textarea rows="3" cols="60" name="post-preview-text" wrap="soft" autofocus>{{$post->preview_text}}</textarea></p>
    <br>
    {{-- <input type="text" name="post_image" value=1> --}}
    
    <p>Post body:</p>
        <p><textarea rows="10" cols="60" name="post-body" wrap="soft" autofocus>
            {{$post->body}}
        </textarea></p>
    <p>Теги:</p>
        @if($errors->has("post-tag.*"))
            <div class="alert alert-danger">
                @foreach ($errors->get("post-tag.*") as $error)
                    @foreach($error as $err)
                        {{$err}}
                    @endforeach
                @endforeach
            </div>
        @endif
        <br>
        @foreach(\App\Tag::all() as $tag)
            <input type="checkbox" name="post-tag[]" value="{{$tag->id}}">{{$tag->name}}
        @endforeach
    <br>
    <br>

    <input type="submit" name="post-update" value="Update">

@csrf
</form>
<br>
<hr>
<nav>
<a href="{{route('index.blog')}}"> hillel-24 </a> | 
<a href="{{route('posts.index')}}"> Index (List) </a> | 
<a href="{{route('posts.edit', ['post'=>\App\Post::all()->first()])}}"> Edit -> Update </a>
</nav>