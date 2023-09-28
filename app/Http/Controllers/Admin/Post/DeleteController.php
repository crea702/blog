<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Post1;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Post1 $post1)
    {
        $post1->delete();
        return redirect()->route('admin.post.index');
    }
}
