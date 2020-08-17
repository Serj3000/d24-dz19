<?php
    //$reque=session();
?>
<h2>Post Create</h2>
<h3>location: "~views/admins/posts/create_post.blade.php"</h3>
<nav>
<a href="{{route('index.blog')}}"> hillel-24 </a> | 
<a href="{{route('posts.index')}}"> Index (List) </a> | 
<a href="{{route('posts.edit', ['post'=>\App\Post::all()->first()])}}"> Edit -> Update </a>
</nav>
<hr>
<br>

{{-- {{$errors}} --}}

{{-- {{($errors->has("name"))}} --}}

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


<form method="POST" action="{{route('posts.store')}}" id="posts-form">

    <p>Autor:</p>
        @error('autor-id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <select name="autor-id" form="posts-form">
            @foreach(\App\User::all() as $autor)
                <option value="{{$autor->id}}">{{$autor->name}}</option>
            @endforeach
        </select>

    <p>Category name:</p>
        @error('category-id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <select name="category-id" form="posts-form">
        @foreach(\App\Category::all() as $category)
            <option value="{{$category->id}}" @if($category->id==old('$category->id')) selected @endif>{{$category->name}}</option>
        @endforeach
        </select>

    <p>Post title:</p>
        @error('post-title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <p><textarea rows="1" cols="60" name="post-title" wrap="soft" autofocus>Title lorem text</textarea></p>
    
    <p>Preview text:</p>
        @error('post-preview-text')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <p><textarea rows="3" cols="60" name="post-preview-text" wrap="soft" autofocus>Lorem preview text</textarea></p>
    <br>
    {{-- <input type="text" name="post_image" value=1> --}}
    
    <p>Post body:</p>
        @error('post-body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <p><textarea rows="10" cols="60" name="post-body" wrap="soft" autofocus>
        Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem
        Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
        В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов,
        используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил
        без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его
        популяризации в новое время послужили публикация листов Letraset с образцами
        Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки
        типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
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

    <input type="submit" name="post-create" value="Create">

@csrf
</form>
<br>
<hr>
<nav>
<a href="{{route('index.blog')}}"> hillel-24 </a> | 
<a href="{{route('posts.index')}}"> Index (List) </a> | 
<a href="{{route('posts.edit', ['post'=>\App\Post::all()->first()])}}"> Edit -> Update </a>
</nav>
