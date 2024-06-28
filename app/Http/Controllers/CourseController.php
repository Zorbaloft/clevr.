<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::where('status', 'ativar')->latest()->limit(10)->get();

        return view('courses.index', [
            'courses' => $courses,
        ]);
    }

    /**
     * Display the specified resource.
     */

    
    public function show(string $id)
    {
        $course = Course::where('slug', $id)->first();
        $lessons = $course->lessons()->orderBy('order')->get();

        if ($course->status !== 'ativar') {
            abort(404);
        }

        return view('courses.show', [
            'course' => $course,
            'lessons' => $lessons,
        ]);
    }
    


}