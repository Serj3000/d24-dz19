<h2>Categories Update</h2>
<h3>location: "~views/admins/categories/update_category.blade.php"</h3>
<nav>
<a href="{{route('index.blog')}}"> hillel-24 </a> | 
<a href="{{route('categories.index')}}"> Index (List) </a> | 
<a href="{{route('categories.edit', ['category'=>\App\Category::all()->first()])}}"> Edit -> Update </a>
</nav>
<hr>
<br>
{{-- {{dd($errors)}} --}}

{{-- {{($errors->has("name"))}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <p>Error:</p>
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form method="POST" action="{{route('categories.update', ['category'=>$category->id])}}">
@method("PUT")

    <p>Categoy id: <span style="color: blue">{{$category->id}}</span></p>
    <p>Categoy name:</p>
        @if($errors->has("name"))
            <div class="alert alert-danger">
                @foreach ($errors->get("name") as $error)
                    {{$error}}
                @endforeach
            </div>
        @endif
    <input type="text" name="name" value="{{old('name', $category->name)}}" @if($errors->has("name")) style="border-color: red" @endif>
    {{-- <input type="text" name="name_update" value="Features" @if($errors->has("name")) style="border-color: red" @endif> --}}
    <br>
    <p>Category slug:</p>
        @if($errors->has("slug"))
            <div class="alert alert-danger">
                @foreach ($errors->get("slug") as $error)
                    {{$error}}
                @endforeach
            </div>
        @endif
    <input type="text" name="slug" value="{{old('slug', $category->slug)}}" @if($errors->has("slug")) style="border-color: red" @endif>
    {{-- <input type="text" name="slug_update" value="features" @if($errors->has("slug")) style="border-color: red" @endif> --}}
    <br><br>
    <input type="submit" name="update" value="Update">
    <br>

    @csrf
</form>