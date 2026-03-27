<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::where('status', 'active')
            ->with('images')
            ->latest()
            ->paginate(12);
        
        return view('courses.index', compact('courses'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::where('status', 'active')
            ->with('images')
            ->findOrFail($id);
        
        return view('courses.show', compact('course'));
    }
}
