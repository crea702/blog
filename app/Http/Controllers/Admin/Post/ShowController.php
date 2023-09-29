<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post1;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Post1 $post)
    {

        return view('admin.posts.show', compact('post'));
    }
}
