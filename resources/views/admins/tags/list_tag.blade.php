<h2>Tags List</h2>
<h3>location: "~views/admins/categories/list_tag.blade.php"</h3>
<nav>
<a href="{{route('tags.create')}}">Create</a>
</nav>

<table width="100%" border="1">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Date</th>
            <th> Drop </th>
            <br>
        </tr>
    @foreach($tags as $tag)
        <tr>
            <td width="5%">{{$tag->id}}</td>
            <td width="40%">{{$tag->name}}</td>
            <td width="30%">{{$tag->slug}}</td>
            <td width="20%">{{$tag->created_at}}</td>
            <td width="5%">
                <form method="POST" action="{{route('tags.destroy', ['tag'=>$tag->id])}}">
                    @method('delete')
                    @csrf

                    <input type="submit" value="x">
                </form>
            </td>
        </tr>
    @endforeach
</table>