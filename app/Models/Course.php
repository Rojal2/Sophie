<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'type',
        'duration',
        'price',
        'meta_title',
        'meta_description',
    ];

    public function scopeTestPrep($query)
    {
        return $query->where('type', 'test_prep');
    }

    public function scopeLanguage($query)
    {
        return $query->where('type', 'language');
    }
}
