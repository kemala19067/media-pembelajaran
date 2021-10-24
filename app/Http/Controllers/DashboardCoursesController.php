<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.courses.index', [
            'courses' => Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:courses',
            'body' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');

        course::create($validatedData);

        return redirect('/dashboard/courses')->with('success', 'Materi baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('dashboard.courses.show', [
            'course' => $course
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('dashboard.courses.edit', [
            'course' => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required'
        ];

        if($request->slug != $course->slug) {
            $rules['slug'] = 'required|unique:courses';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');

        course::where('id', $course->id)
            ->update($validatedData);

        return redirect('/dashboard/courses')->with('success', 'Materi telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        course::destroy($course->id);
        return redirect('/dashboard/courses')->with('success', 'Materi telah dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(course::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
