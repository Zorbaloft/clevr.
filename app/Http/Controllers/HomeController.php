<?php

namespace App\Http\Controllers;

use App\Models\Course;

class HomeController extends Controller
{
    public function __invoke()
    {
        $courses = Course::where('status', 'ativar')->latest()->limit(5)->get();
        return view('welcome', [
            'courses' => $courses,
        ]);
    }
}