<!DOCTYPE html>
<html>
<head>
 <title>Categories</title>
</head>
<body>
 @if (count($categories) == 0)
 <p color='red'> There are no categories in the database!</p>
 @else
 <table style="border: 1px solid black">
 <tr>
 <td> Category Id </td>
 <td> Category Name </td>
 <td> recipes </td>
 <td> </td>
 </tr>
 @foreach ($categories as $category)
 <tr>
 <td> {{ $category->id }} </td>
<td> {{ $category->category_name }} </td>
<td>
   <img src='{{asset($category->cphoto)}}' width='50' height='50'/>
</td>
<td> <input type="button" value="show"
onclick="showRecipes({{ $category->id }})"> </td>
<td>
 <form method="POST"

action='{{action([App\Http\Controllers\CategoryController::class, 'destroy'],
$category -> id) }}'>
 @csrf @method('DELETE')
<input type="submit" value="delete"></form>
 </td>
</td>
 @endforeach
 </table>
 @endif
 <p> <input type="button" value="New Category" onclick="newCategory()"> </p>

 <script>
    function showRecipes(countryID) {
 window.location.href = "/recipe/category/" + countryID;
 }
 function newCategory() {
    window.location.href = "/category/create";
 }
 </script>
</body>
</html>