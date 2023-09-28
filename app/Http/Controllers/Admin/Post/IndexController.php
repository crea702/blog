<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post1;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
       $posts = Post1::all();
       return view('admin.posts.index',compact('posts'));
    }
}
