<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class UserController extends Controller
{
    public function home()
    {
        return view('homePage');
    }

    public function teachers()
    {
        $Teachers = Teacher::all();

        return view('teachers', compact('Teachers'));
    }

    public function about()
    {
        return view('about');
    }

    public function notice()
    {
        return view('notice');
    }

    public function noticeDetails()
    {
        return view('noticeDetails');
    }

    public function career()
    {
        return view('career');
    }

    public function careerDetails()
    {
        return view('careerDetails');
    }

    public function events()
    {
        return view('events');
    }

    public function contact()
    {
        return view('contact');
    }

    public function admission()
    {
        return view('admission');
    }

    public function result()
    {
        return view('result');
    }

    public function testPage()
    {
        // dd();result
        return view('testPage');
    }
}
