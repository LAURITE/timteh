<!DOCTYPE html>
<html>
<head>
 <title>New Category</title>
</head>
<body>
 We will add a new category</b>:
 <form method="POST"
action="{{action([App\Http\Controllers\CategoryController::class, 'store']) }}" 
enctype='multipart/form-data'>
 @csrf
 <label for="category_name">Category Name: </label>
 <input type="text" name="category_name" id="category_name">
 <label> Photo: </label>
 <input type='file' name='cphoto' class='form-control-file'id='cphoto'>
 <input type="submit" value="add">
 </form>
</body>
</html>