<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post1 extends Model
{
    use HasFactory;

    protected $table = 'post1s';
    protected $guarded = false;

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post1_tags', 'post_id','tag_id');
    }
}
