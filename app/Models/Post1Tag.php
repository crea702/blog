<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post1Tag extends Model
{
    use HasFactory;
    protected $table = 'post1_tags';
    protected $guarded = false;
}
