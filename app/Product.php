<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'description', 'price', 'barcode', 'stock', 'cover'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function gallery()
    {
        return $this->hasOne(Gallery::class);
    }
}
