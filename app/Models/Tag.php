<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    //Mutators------------------------------------------------------
    public function setSlugAttribute()
    {
        $this->attributes['slug'] = Str::slug($this->attributes['title']);
    }

    //Relations-----------------------------------------------------
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
