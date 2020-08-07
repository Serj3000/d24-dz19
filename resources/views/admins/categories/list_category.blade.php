<h2>Categories List</h2>
<h3>location: "~views/admins/categories/list_category.blade.php"</h3>
<nav>
<a href="{{route('categories.create')}}">Create</a>
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
    @foreach($categories as $category)
        <tr>
            <td width="5%">{{$category->id}}</td>
            <td width="40%">{{$category->name}}</td>
            <td width="30%">{{$category->slug}}</td>
            <td width="20%">{{$category->created_at}}</td>
            <td width="5%">
                <form method="POST" action="{{route('categories.destroy', ['category'=>$category->id])}}">
                    @method('delete')
                    @csrf

                    <input type="submit" value="x">
                </form>
            </td>
        </tr>
    @endforeach
</table>