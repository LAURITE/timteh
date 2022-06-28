<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\StepController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', 'category');
Route::resource('category', CategoryController::class);
Route::resource('recipe', RecipeController::class, ['except' => ['index',
'create']]);
Route::get('recipe/category/{id}', [RecipeController::class, 'index']); 

Route::get('recipe/category/{id}/create', [RecipeController::class, 'create']);
Route::get('category/create', [CategoryController::class, 'create']);  

Route::get("/recipe/category/create/recipeedit/{id}",[RecipeController::class,'updateRecipe']);
Route::post('recipeedit',[RecipeController::class,'finishUpdate']);

Route::resource('step', StepController::class, ['except' => ['index','create']]);
Route::get('/recipe/category/step/{id}', [StepController::class, 'index']);

Route::post('/search', [RecipeController::class, 'search']);
 
