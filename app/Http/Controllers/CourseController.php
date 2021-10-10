<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CourseController extends Controller
{
    public function index() {
        return view('courses', [
            "title" => "Course",
            "courses" => course::all()
        ]);
    }

    public function show(course $course) {
        return view('course', [
            "title" => "Materi",
            "course" => $course
        ]);
    }
}
