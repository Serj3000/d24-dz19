<h2>Categories Create</h2>
<h3>location: "~views/admins/categories/create_category.blade.php"</h3>
<form method="POST" action="{{route('categories.store')}}">
    <p>Categoy name</p>
    <input type="text" name="name">
    <br>
    <p>Category slug</p>
    <input type="text" name="slug">
    <br><br>
    <input type="submit" name="create" value="create">
    <br>

    @csrf
</form>