<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];



}
