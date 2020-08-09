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
    <p>Categoy name</p>
    <input type="text" name="name">
    <br>
    <p>Category slug</p>
    <input type="text" name="slug">
    <br><br>
    <input type="submit" name="create" value="Create">
    <br>

    @csrf
</form>