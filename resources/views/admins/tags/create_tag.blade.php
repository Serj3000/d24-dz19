<h2>Tags Create</h2>
<h3>location: "~views/admins/tags/create_tag.blade.php"</h3>
<nav>
<a href="{{route('index.blog')}}"> hillel-24 </a> | 
<a href="{{route('tags.index')}}"> Index (List) </a> | 
<a href="{{route('tags.edit', ['tag'=>\App\Tag::all()->first()])}}"> Edit -> Update </a>
</nav>
<hr>
<br>
<form method="POST" action="{{route('tags.store')}}">
    <p>Tag name</p>
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->get("name") as $error)
                    {{$error}}
                @endforeach
            </div>
        @endif
        <input type="text" name="name" value="{{old('name')}}" @if($errors->has("name")) style="border-color: red" @endif>
    <br>
    <p>Tag slug</p>
            @if($errors->has("slug"))
            <div class="alert alert-danger">
                @foreach ($errors->get("slug") as $error)
                    {{$error}}
                @endforeach
            </div>
        @endif
    <input type="text" name="slug" value="{{old('slug')}}" @if($errors->has("slug")) style="border-color: red" @endif>
    <br><br>
    <input type="submit" name="create" value="Create">
    <br>

    @csrf
</form>