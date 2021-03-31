<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function setSlugAttribute($value) {

        if (static::whereSlug($slug = str_slug($value))->exists()) {

            $slug = $this->incrementSlug($slug);
        }

        $this->attributes['slug'] = $slug;
    }


    public function incrementSlug($slug) {

        $original = $slug;

        $count = 2;

        while (static::whereSlug($slug)->exists()) {

            $slug = "{$original}-" . $count++;
        }

        return $slug;

    }


    public function category(){

        return $this->belongsTo(Category::class);
    }
}
