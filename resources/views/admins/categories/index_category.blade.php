<h2>Categories Index (List)</h2>
<h3>location: "~views/admins/categories/index_category.blade.php (list_category.blade.php)"</h3>
<nav>
<a href="{{route('index.blog')}}"> hillel-24 </a> | 
<a href="{{route('categories.create')}}"> Create </a> | 
<a href="{{route('categories.edit', ['category'=>\App\Category::all()->first()])}}"> Edit -> Update </a>
</nav>
<hr>
<br>
<div>
    @if(\Session::has('success'))
        <span style="color: green">{{\Session::get('success')}}</span>
    @endif
</div>
<br>
<table width="100%" border="1">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Edit</th>
            <th>Drop</th>
            <br>
        </tr>
    @foreach($categories as $category)
        <tr>
            <td width="5%">{{$category->id}}</td>
            <td width="30%">{{$category->name}}</td>
            <td width="25%">{{$category->slug}}</td>
            <td width="12%">{{$category->created_at}}</td>
            <td width="12%">{{$category->updated_at}}</td>
            {{-- <td width="8%"><a href="{{route('categories.update', ['category'=>$category->id.'/edit'])}}"> Update </a></td> --}}
            <td width="8%"><a href="{{route('categories.edit', ['category'=>$category->id])}}"> Edit </a></td>
            <td width="8%">
                <form method="POST" action="{{route('categories.destroy', ['category'=>$category->id])}}">
                    @method('delete')
                    @csrf

                    <input type="submit" value="x">
                </form>
            </td>
        </tr>
    @endforeach
</table>