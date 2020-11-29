<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Image extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    //Mutators
    public function setAltAttribute()
    {
        $this->attributes['alt'] = Str::slug($this->attributes['title']);
    }

    //Relations
    public function imageable()
    {
        return $this->morphTo();
    }
}
