<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('homePage');
    }

    public function teachers()
    {
        return view('teachers');
    }

    public function about()
    {
        return view('about');
    }
}
