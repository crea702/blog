<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\SroreRequest;
use App\Models\Comment;
use App\Models\Post1;


class StoreController extends Controller
{
    public function __invoke(Post1 $post)
    {

        auth()->user()->likedPosts()->toggle($post->id);


        return redirect()->back();
    }
}
