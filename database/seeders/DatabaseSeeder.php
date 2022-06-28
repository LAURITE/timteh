<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
//  $category = Category::create([
//  'category_name' => 'Salāti',
//  ]);
//  $category = Category::create([
//     'category_name' => 'Zupas',
//     ]);
//     $category = Category::create([
//         'category_name' => 'Saldie',
//         ]);
//  $category = Category::where('category_name', 'Salāti')->first();
//  $category->recipes()->create(['recipe_name' => 'Cēzara salāti']);
//  $recipe = new Recipe();
//  $recipe->recipe_name = 'Aukstā zupa';
//  $category = Category::where('category_name', 'Zupas')->first();
//  $category->recipes()->save($recipe);

//  $category = Category::where('category_name', 'Saldie')->first();
//  $recipe = new Recipe();
//  $recipe->recipe_name = 'Ābolmaize';
//  $recipe->category()->associate($category);
//  $recipe->save();

 DB::statement('SET FOREIGN_KEY_CHECKS=1;');
 }
}
