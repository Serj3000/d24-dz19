<h2>Posts Index (List)</h2>
<h3>location: "~views/admins/posts/index_post.blade.php (list_post.blade.php)"</h3>
<nav>
<a href="{{route('index.blog')}}"> hillel-24 </a> | 
<a href="{{route('posts.create')}}"> Create </a> | 
<a href="{{route('posts.edit', ['post'=>\App\Post::all()->first()])}}"> Edit -> Update </a>
</nav>
<hr>
<br>
<div>

</div>
<br>
<table width="100%" border="1">
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Autor</th>
        <th>Category</th>
        <th>Saw</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Edit</th>
        <th>Drop</th>
        <br>
    </tr>
    @foreach($posts as $post)
        <tr>
            <td width="2%">{{$post->id}}</td>
            <td width="35%">{{$post->title}}</td>
            <td width="15%">{{$post->user->name}}</td>
            <td width="15%">{{$post->category->name}}</td>
            <td width="3%">{{$post->saw}}</td>
            <td width="12%">{{$post->created_at}}</td>
            <td width="12%">{{$post->updated_at}}</td>
            <td width="3%">Edit</td>
            <td width="3%">
                <form method="POST" action="{{route('posts.destroy', ['post'=>$post->id])}}">
                @method('DELETE')
                    <input type="submit" name="postdrop" value="Drop">
                    {{-- <p><a href="{{route('post.destroy', ['id'=>$post->id])}}">Drop</p> --}}
                @csrf
                </form>
            </td>
        </tr>
    @endforeach
</table>
<br>
<hr>
<nav>
<a href="{{route('index.blog')}}"> hillel-24 </a> | 
<a href="{{route('posts.create')}}"> Create </a> | 
<a href="{{route('posts.edit', ['post'=>\App\Post::all()->first()])}}"> Edit -> Update </a>
</nav>
