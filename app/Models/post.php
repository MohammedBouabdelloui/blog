<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use HasFactory; 
    use SoftDeletes;

    protected $fillable=['title' , 'description' , 'img_path_1' , 'img_path_2 ', 'img_path_3' , 'categorie_id' , 'author_id' , 'validation_post'];

}
