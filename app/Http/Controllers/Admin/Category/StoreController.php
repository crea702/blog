<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\SroreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(SroreRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate(['title'=> $data['title']]);
        return redirect()->route('admin.category.index');
    }
}
