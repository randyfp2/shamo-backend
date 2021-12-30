<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductGallery extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'products_id',
        'url',
    ];

    public function getUrlAttribute($url) //mutator
    {
        return config('app.url') . Storage::url($url); //supaya return datanya lengkap, http:// blablabla, karena di mobile butuh full url

    }

    // public function category() 
    // {
    //     return $this->belongsTo(ProductCategory::class, 'category_id', 'id'); 
    // }
}
