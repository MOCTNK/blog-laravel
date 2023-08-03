<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Service\PostService;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public $isAdmin;
    public function __construct() {
        //$isAdmin = auth()->user()->role == User::ROLE_ADMIN;
        //View::Share('isAdmin', $isAdmin);
        $this->middleware(function ($request, $next) {
            $this->isAdmin = auth()->user()->role == User::ROLE_ADMIN;
            View::Share('isAdmin', $this->isAdmin);
            return $next($request);
        });
    }

}
