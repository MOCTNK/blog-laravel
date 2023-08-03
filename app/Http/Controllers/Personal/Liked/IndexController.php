<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Personal\BaseController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {

        $posts = auth()->user()->likedPosts;
        return view('personal.liked.index', compact('posts'));
    }
}
