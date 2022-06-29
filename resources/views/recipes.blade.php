<!DOCTYPE html>
<html>
<head>
 <title>Recipes</title>
</head>
<body>
 @if (count($recipes) == 0)
 <p color='red'> There are no recipes in this category!</p>
 @else
 <table style="border: 1px solid black">
 <tr>
 <td> Recipe Id </td>
 <td> Recipe Name </td>
 <td> Category ID </td>
 <td> </td>
 </tr>
 @foreach ($recipes as $recipe)
 <tr>
 <td> {{ $recipe->id }} </td>
<td> {{ $recipe->recipe_name }} </td>
<td> {{ $recipe->category->id }} </td>
<td>
   <img src='{{asset($recipe->photo)}}' width='150' height='150'/>
</td>
 <td> <form method="POST"

action="{{action([App\Http\Controllers\RecipeController::class, 'destroy'],
$recipe->id) }}">
 @csrf @method('DELETE')<input type="submit"
value="delete"></form></td>
<td>
    <input type='button' value='open' onclick='openRecipe( {{ $recipe->id}})'>
</td>
<td>
    <input type='button' value='update' onclick='updateRecipe( {{ $recipe->id}})'>
</td>
</td>
 @endforeach
 </table>
 @endif
 @if (count($recipes)==0 )
 <p> <input type="button" value="New Recipe" onclick="newRecipe( {{ $category_id
}}
)"> </p>
@else
<p> <input type="button" value="New Recipe" onclick="newRecipe( {{ $recipe->category->id
}}
)"> </p>
 @endif
 <form method='post' action="{{url('/search')}}">
{{csrf_field()}}
<input type='text' placeholder='Velamais Produkts' name='yesname'>
<input type='text' placeholder='Nevelamais produkts' name='noname'>
<!-- <input type='text' placeholder='nevēlamās sastāvdaļas' name='noname'> -->
<input type='submit' value='Atrast'>
</form>

 <script>
 function newRecipe(categoryID) {
    window.location.href = "/recipe/category/" + categoryID + "/create";
 }
 function updateRecipe(recipeID) {
    window.location.href = "/recipe/category/create/recipeedit/"+recipeID;
 }
 function openRecipe(recipeID) {
    window.location.href = "/recipe/category/step/"+recipeID; 
 }
 </script>
</body>
</html>