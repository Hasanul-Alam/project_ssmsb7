<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('admin.teacher.index');
    }

    public function manage()
    {
        return view('admin.teacher.manage');
    }
}