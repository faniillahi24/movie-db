<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Movie extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'synopsis',
        'category_id',
        'year',
        'actor',
        'cover_image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
