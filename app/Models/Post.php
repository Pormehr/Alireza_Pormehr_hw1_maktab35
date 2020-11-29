<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    //Mutators
    public function setSlugAttribute()
    {
        $this->attributes['slug'] = Str::slug($this->attributes['title']);
    }

    //Relations
    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
