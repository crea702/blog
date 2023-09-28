<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\SroreRequest;
use App\Models\Post1;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(SroreRequest $request)
    {
        $data = $request->validated();
        Post1::firstOrCreate($data);
        return redirect()->route('admin.post.index');
    }
}

