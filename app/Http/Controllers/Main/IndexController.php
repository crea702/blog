<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post1;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
//        $posts = Post1::paginate(6);
//        $randomPosts = Post1::get()->random(4);
//        $likesPosts = Post1::withCount('likedUser')->orderBy('liked_user_count', 'DESC')->get()->take(4);
//
//        return view('main.index', compact('posts','randomPosts', 'likesPosts'));
        return redirect()->route('post.index');
    }
}
