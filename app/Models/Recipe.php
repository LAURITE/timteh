<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
 use HasFactory;
 protected $table='recipes';
 protected $primaryKey='id';
 protected $fillable=['category_id','recipe_name','photo','recipe_steps','product'];
 public function category()
 { // FK relationship
 return $this->belongsTo(Category::class);
 }
}