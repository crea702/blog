<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post1;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Post1 $post)
    {
        $categoriesProverka = Category::all();
        $tagsProverka = Tag::all();
        return view('admin.posts.edit',compact('post','categoriesProverka', 'tagsProverka' ));
    }
}
