<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post1;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $dataMassiv = [];
            $dataMassiv['userCount'] = User::all()->count();
            $dataMassiv['postCount'] = Post1::all()->count();
            $dataMassiv['categoryCount'] = Category::all()->count();
            $dataMassiv['tagCount'] = Tag::all()->count();


        return view('admin.main.index', compact('dataMassiv'));
    }
}
