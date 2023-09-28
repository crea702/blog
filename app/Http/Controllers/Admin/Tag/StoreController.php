<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\SroreRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(SroreRequest $request)
    {
        $data = $request->validated();
        Tag::firstOrCreate(['title'=> $data['title']]);
        return redirect()->route('admin.tag.index');
    }
}
