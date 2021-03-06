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

<form method="POST" action="{{route('posts.update', ['post'=>$post->id])}}" id="update_posts_form">
    @method('PUT')

    <p>Post id:</p>
    <p>{{$post->id}}</p>

    <p>Autor:</p>
        @error('update_post_autor')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <select name="update_post_autor" form="update_posts_form">
            @foreach(\App\User::all() as $autor)
                {{-- <option value="{{$autor->id}}" @if($autor->id==old('$autor->id')) selected @endif>{{$autor->name}}</option> --}}
                <option value="{{$autor->id}}" @if($post->user->id==$autor->id) selected @endif>{{$autor->name}}</option>
            @endforeach
        </select>
        {{-- <input type="text" name="update_post_autor" value="{{$post->user->name}}"> --}}

    <p>Category name:</p>
        {{-- @error('update_post_category')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <select name="update_post_category" form="update_posts_form">
        @foreach(\App\Category::all() as $category)
            {{-- <option value="{{$category->id}}" @if($category->id==old('$category->id')) selected @endif>{{$category->name}}</option> --}}
            <option value="{{$category->id}}" @if($post->category->id==$category->id) selected @endif>{{$category->name}}</option>
        @endforeach
        </select>
        {{-- <input type="text" name="update_post_category" value="{{$post->category->name}}"> --}}

    <p>Post title:</p>
        @error('post_title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <p><textarea rows="1" cols="60" name="post_title" wrap="soft" autofocus>{{$post->title}}</textarea></p>
    
    <p>Preview text:</p>
        @error('post_preview_text')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <p><textarea rows="3" cols="60" name="post_preview_text" wrap="soft" autofocus>{{$post->preview_text}}</textarea></p>
    <br>
    {{-- <input type="text" name="post_image" value=1> --}}
    
    <p>Post body:</p>
        @error('post_body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <p><textarea rows="10" cols="60" name="post_body" wrap="soft" autofocus>
            {{$post->body}}
        </textarea></p>
    
    <p>Теги:</p>
        @if($errors->has("post_tag.*"))
            <div class="alert alert-danger">
                @foreach ($errors->get("post_tag.*") as $error)
                    @foreach($error as $err)
                        {{$err}}
                    @endforeach
                @endforeach
            </div>
        @endif
        <br>

    {{-- ----------------------------------------------------------------------------------------------------------- --}}
        <?php $keyTa=DB::table('post_tag')->where('post_id', $post->id)->value('tag_id') ?>
        <?php $keyTags=DB::table('post_tag')->where('post_id', $post->id)->get() ?>
        {{-- @foreach(DB::select('select * from "post_tag" where post_id = :post_id', ['post_id' => $post->id])) --}}
    {{-- ----------------------------------------------------------------------------------------------------------- --}}

        @foreach(DB::table('post_tag')->where('post_id', $post->id)->get() as $keyTag)
            {{$val[]=$keyTag->tag_id}}
        @endforeach
        <br>
        @foreach(\App\Tag::all() as $tag)
            <input type="checkbox" name="post_tag[]" value="{{$tag->id}}" @if(!empty($val) && in_array($tag->id, $val)) checked @endif>{{$tag->name}}
        @endforeach
        <br>
    <br>
    <br>

    <input type="submit" name="post_update" value="Update">

@csrf
</form>
<br>
<hr>
<nav>
<a href="{{route('index.blog')}}"> hillel-24 </a> | 
<a href="{{route('posts.index')}}"> Index (List) </a> | 
<a href="{{route('posts.edit', ['post'=>\App\Post::all()->first()])}}"> Edit -> Update </a>
</nav>