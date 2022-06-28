<!DOCTYPE html>
<html>
<head>
 <title>Edit a recipe</title>
</head>
<body>
Updating a recipe:</b>:
 <form method="POST"
action="/recipeedit ">
 @csrf
 <input type='hidden' name='id' value={{$recipe['id']}}>
 <div><label for='recipe_name'> Recepe name:</label>
 <input type='text' name='recipe_name' id='recipe_name' value="{{$recipe['recipe_name']}}"></div>
 <label for="recipe_steps">Steps: </label>
 <input type="text" name="recipe_steps" id="recipe_steps" value="{{$recipe['recipe_steps']}}">
 <label for="recipe_steps">Ingredients: </label>
 <input type="text" name="product" id="product" value="{{$recipe['product']}}">

 <input type="submit" value="Update">
 </form>
</body>
</html>