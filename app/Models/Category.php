<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Recipe;
class Category extends Model
{
 use HasFactory;
 // to allow mass assignment of these fields
 protected $fillable = ['category_name','cphoto'];
 public function recipes()
 { // FKrelationship
 return $this->hasMany(Recipe::class);
 }
}