<h2>Tags Index (List)</h2>
<h3>location: "~views/admins/tags/index_tag.blade.php"</h3>
<nav>
<a href="{{route('index.blog')}}"> hillel-24 </a> |
<a href="{{route('tags.create')}}">Create</a> |
<a href="{{route('tags.edit', ['tag'=>\App\Tag::all()->first()])}}"> Edit -> Update </a>
</nav>
<hr>
<br>
<table width="100%" border="1">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Create</th>
            <th>Update</th>
            <th>Edit</th>
            <th>Drop</th>
            <br>
        </tr>
    @foreach($tags as $tag)
        <tr>
            <td width="5%">{{$tag->id}}</td>
            <td width="30%">{{$tag->name}}</td>
            <td width="25%">{{$tag->slug}}</td>
            <td width="12%">{{$tag->created_at}}</td>
            <td width="12%">{{$tag->updated_at}}</td>
            <td width="8%"><a href="{{route('tags.edit', ['tag'=>$tag->id])}}">Update</a></td>
            <td width="8%">
                <form method="POST" action="{{route('tags.destroy', ['tag'=>$tag->id])}}">
                    @method('delete')
                    @csrf

                    <input type="submit" value="x">
                </form>
            </td>
        </tr>
    @endforeach
</table>