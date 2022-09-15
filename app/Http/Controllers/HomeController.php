<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    private $offerCourses, $course;

    public function index()
    {
        return view('website.home.index', [
            'courses' => Course::where('status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'offer_courses' => Course::where('offer_fee', '>', 0)->orderBy('id', 'desc')->get(),
        ]);
    }
    public function about()
    {
        return view('website.about.index');
    }
    public function courses()
    {
        return view('website.courses.index');
    }

    public function contact()
    {
        return view('website.contact.index');
    }

    public function auth()
    {
        return view('website.auth.index');
    }

    public function detail($id)
    {
        $this->course = Course::find($id);
        return view('website.courses.detail',  ['course' => $this->course]);
    }
}
