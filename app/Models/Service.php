<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'featured',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }


}
