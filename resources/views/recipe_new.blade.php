<!DOCTYPE html>
<html>
<head>
 <title>New recipe</title>
</head>
<body>
 We will add a recipe for <b>{{ $category->category_name }}</b>:
 <form method="POST"
action="{{action([App\Http\Controllers\RecipeController::class, 'store']) }}"
enctype='multipart/form-data'>
 @csrf
 <input type="hidden" name="category_id" value="{{ $category->id }}">
 <label for="recipe_name">Recipe Name: </label>
 <input type="text" name="recipe_name" id="recipe_name">
 <label for="recipe_steps">Steps: </label>
 <input type="text" name="recipe_steps" id="recipe_steps">
 <label for="recipe_steps">Ingredients: </label>
 <input type="text" name="product" id="product">
 <label> Photo: </label>
 <input type='file' name='photo' class='form-control-file'id='photo'>

 <input type="submit" value="add">
 </form>
</body>
</html>