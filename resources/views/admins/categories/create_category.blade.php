<h2>Categories Create</h2>
<h3>location: "~views/admins/categories/create_category.blade.php"</h3>
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

<form method="POST" action="{{route('categories.store')}}">
    <p>Category name:</p>
        @if($errors->has("name"))
            <div class="alert alert-danger">
                @foreach ($errors->get("name") as $error)
                    {{$error}}
                @endforeach
            </div>
        @endif
    <input type="text" name="name" value="{{old('name')}}" @if($errors->has("name")) style="border-color: red" @endif>
    <br>
    <p>Category slug:</p>
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
