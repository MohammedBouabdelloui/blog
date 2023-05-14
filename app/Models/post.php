<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use HasFactory; 
    use SoftDeletes;

    protected $fillable=['title' , 'description' , 'img_path_1' , 'img_path_2 ', 'img_path_3' , 'categorie_id' , 'author_id' , 'validation_post'];

    public function category():BelongsTo
    {
        return $this->belongsTo(category::class , 'categorie_id');
    }

    public function author():BelongsTo
    {
        return $this->belongsTo(author::class);
    }
    
    public function comments(): HasMany
    {
        return $this->hasMany(comment::class);
    }

}
