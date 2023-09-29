<?php

namespace App\Service;

use App\Models\Post1;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Exception;

class PostService
{
    public function store($data){
        try{
            $tagsIds = $data['tag_ids'];
            unset($data['tag_ids']);

            $data['preview_image']= Storage::disk('public')->put('/images', $data['preview_image']);
            $data['main_image']= Storage::disk('public')->put('/images', $data['main_image']);
            $post = Post1::firstOrCreate($data);
            $post->tags()->attach($tagsIds);


        }catch (\Exception $exception){

            abort(500);
        }

    }

    public function update($data, $post){
        try {

            $tagsIds = $data['tag_ids'];
            unset($data['tag_ids']);
            if (isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }

            if(isset($data['main_image'])){
            $data['main_image']= Storage::disk('public')->put('/images', $data['main_image']);
            }

            $post->update($data);
            $post->tags()->sync($tagsIds);

        } catch (Exception $exception){

            abort(500);
        }
        return $post;

    }

}
