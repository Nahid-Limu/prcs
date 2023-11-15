<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacherList()
    {
        // dd('okk');
        return view('admin.teacher.teacherList');
    }

    public function teacherAdd(Request $request)
    {
        dd($request->all());
    }
}
