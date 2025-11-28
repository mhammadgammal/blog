<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Allow mass assignment for title and description
    protected $fillable = ['title', 'description'];
}
