<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction() {
        // return Post::get();
        return Post::with('user')->get();
    }
}
