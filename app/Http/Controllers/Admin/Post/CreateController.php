<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categoriesProverka = Category::all();
        $tagsProverka = Tag::all();
        return view('admin.posts.create', compact('categoriesProverka', 'tagsProverka'));
    }
}
