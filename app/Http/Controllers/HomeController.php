<?php

namespace App\Http\Controllers;

use App\Models\Course;

class HomeController extends Controller
{
    public function __invoke()
    {
        $courses = Course::where('status', 'enabled')->latest()->limit(10)->get();

        $courses = $courses->map(function ($course) {
            $course->userCount = $course->users()->count();
            return $course;
        });

        return view('welcome', [
            'courses' => $courses,
        ]);
    }
}