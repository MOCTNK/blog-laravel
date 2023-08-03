<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Personal\BaseController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $data = [];
        $data['likedCount'] = auth()->user()->likedPosts->count();
        $data['commentCount'] = auth()->user()->comments->count();
        return view('personal.main.index', compact('data'));
    }
}
