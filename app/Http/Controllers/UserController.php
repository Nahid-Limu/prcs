<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Event;
use App\Notice;


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
    
    public function events()
    {
        $Events = Event::all();
        return view('events', compact('Events'));
    }

    public function notice()
    {
        $Notices = Notice::all();
        return view('notice', compact('Notices'));
    }

    public function noticeDetails(Request $request)
    {
        // dd($request->id[0]);
        $id = (base64_decode($request->id[0]));
        $Notice = Notice::find($id);
        return view('noticeDetails', compact('Notice'));
    }
    // public function noticeDetails()
    // {

    //     return view('noticeDetails');
    // }

    public function about()
    {
        return view('about');
    }





    public function career()
    {
        return view('career');
    }

    public function careerDetails()
    {
        return view('careerDetails');
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
