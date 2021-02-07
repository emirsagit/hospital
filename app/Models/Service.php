<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'title', 'slug', 'video', 'image', 'alt', 'excerpt', 'body', 'language', 'seo_title', 'seo_description'
    ];

    public function path()
    {
        return '/' . $this->slug;
    }
}
