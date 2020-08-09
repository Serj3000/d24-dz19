<h2>Tags Update</h2>
<h3>location: "~views/admins/tags/update_tag.blade.php"</h3>
<nav>
<a href="{{route('index.blog')}}"> hillel-24 </a> | 
<a href="{{route('tags.index')}}"> Index (List) </a> | 
<a href="{{route('tags.edit', ['tag'=>\App\Tag::all()->first()])}}"> Edit -> Update </a>
</nav>
<hr>
<br>

<form method="POST" action="{{route('tags.update', ['tag'=>$tag])}}">
@method("PUT")

<p>Tag name:</p>
        @if($errors->has("name"))
            <div class="alert alert-danger">
                @foreach ($errors->get("name") as $error)
                    {{$error}}
                @endforeach
            </div>
        @endif
<input type="text" name="name" value="{{old('name', $tag->name)}}">
<br>
<p>Tag slug:</p>
            @if($errors->has("slug"))
            <div class="alert alert-danger">
                @foreach ($errors->get("slug") as $error)
                    {{$error}}
                @endforeach
            </div>
        @endif
<input type="text" name="slug" value="{{old('slug', $tag->slug)}}">
<br><br>
<input type="submit" name="submit_tag" value="Update">

@csrf
</form>