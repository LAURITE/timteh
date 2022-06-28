<!DOCTYPE html>
<html>
<head>
 <title>See the recipe</title>
</head>
<body>
</b>
 <form method="POST"
action="/recipeedit ">
 @csrf
 <table style="border: 1px solid black">
 <tr>
 <td> Recipe Id </td>
 <td> Recipe Name </td>
 <td> Category ID </td>
 <td> Ingredients</td>
 <td> How to cook it</td>
 <td> </td>
 </tr>
 @foreach ($recipes as $recipe)
 <tr>
 <td> {{ $recipe->id }} </td>
<td> {{ $recipe->recipe_name }} </td>
<td> {{ $recipe->category_id }} </td>
<td> {{ $recipe->product }} </td>
<td> {{ $recipe->recipe_steps }} </td>
<td>
   <img src='{{asset($recipe->photo)}}' width='50' height='50'/>
</td>
@endforeach

 </table>

 </form>
</body>
</html>