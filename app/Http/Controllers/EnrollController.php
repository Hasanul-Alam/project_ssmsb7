<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    private $course;

    public function index($id)
    {
        $this->course = Course::find($id);
        return view('website.enroll.index', ['course' => $this->course]);
    }

    public function enroll(Request $request, $id)
    {
        return $request->all();
    }
}
