<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction() {
        // return User::get();
        return User::with('post')->get();
    }
}
