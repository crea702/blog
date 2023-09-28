<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\SroreRequest;
use App\Models\Post1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(SroreRequest $request)
    {
        try{

        $data = $request->validated();
        $tagsIds = $data['tag_ids'];
        unset($data['tag_ids']);

        $data['preview_image']= Storage::put('/images', $data['preview_image']);
        $data['main_image']= Storage::put('/images', $data['main_image']);
        $post = Post1::firstOrCreate($data);
        $post->tags()->attach($tagsIds);
        return redirect()->route('admin.post.index');
        }catch (\Exception $exception){
            abort(404);
        }
    }
}

