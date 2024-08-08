<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction() {
        return User::with('profile')->get();
    }
}
