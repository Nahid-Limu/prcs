<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Event;
use App\Notice;
use App\Result;
use App\Career;


class UserController extends Controller
{
    public function home()
    {
        return view('homePage');
    }

    public function teachers()
    {
        // $Teachers = Teacher::all();
        $Teachers = Teacher::orderBy('id', 'desc')->get();
        return view('teachers', compact('Teachers'));
    }
    
    public function events()
    {
        $Events = Event::orderBy('id', 'desc')->get();
        return view('events', compact('Events'));
    }

    public function notice()
    {
        $Notices = Notice::orderBy('id', 'desc')->get();
        return view('notice', compact('Notices'));
    }

    public function noticeDetails($id)
    {
        $id = (base64_decode($id));
        $Notice = Notice::find($id);
        return view('noticeDetails', compact('Notice'));
    }

    public function result()
    {
        $Results = Result::orderBy('id', 'desc')->get();
        return view('result', compact('Results'));
    }

    public function about()
    {
        return view('about');
    }





    public function career()
    {
        // $Careers = Career::all();
        $Careers = Career::orderBy('id', 'desc')->get();
        // dd($Careers);
        return view('career', compact('Careers'));
    }

    // public function careerDetails(Request $request)
    // {
    //     dd($request->all());
    //     // $id = (base64_decode($id));
    //     $Career = Career::find($id);
    //     return view('careerDetails', compact('Career'));
    // }
    public function careerDetails($id)
    {
        $id = (base64_decode($id));
        $Career = Career::find($id);
        // dd($Career);
        return view('careerDetails', compact('Career'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function admission()
    {
        return view('admission');
    }



    public function testPage()
    {
        // dd();result
        return view('testPage');
    }
}
