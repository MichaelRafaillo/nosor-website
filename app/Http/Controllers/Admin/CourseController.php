<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::latest()->paginate(15);
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'nullable|string',
            'presenter' => 'nullable|string|max:255',
            'youtube_url' => 'nullable|url',
            'date' => 'nullable|date',
            'time' => 'nullable',
            'content' => 'nullable|string',
            'status' => 'required|in:active,draft',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $course = Course::create($validated);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('courses', 'public');
                CourseImage::create([
                    'course_id' => $course->id,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.courses.index')
            ->with('success', 'تم إنشاء الكورس بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::with('images')->findOrFail($id);
        return view('admin.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::with('images')->findOrFail($id);
        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'nullable|string',
            'presenter' => 'nullable|string|max:255',
            'youtube_url' => 'nullable|url',
            'date' => 'nullable|date',
            'time' => 'nullable',
            'content' => 'nullable|string',
            'status' => 'required|in:active,draft',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'delete_images' => 'nullable|array',
            'delete_images.*' => 'exists:course_images,id',
        ]);

        $course->update($validated);

        // Handle image deletions
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $image = CourseImage::find($imageId);
                if ($image) {
                    Storage::disk('public')->delete($image->image_path);
                    $image->delete();
                }
            }
        }

        // Handle new image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('courses', 'public');
                CourseImage::create([
                    'course_id' => $course->id,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.courses.index')
            ->with('success', 'تم تحديث الكورس بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::with('images')->findOrFail($id);
        
        // Delete associated images
        foreach ($course->images as $image) {
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }
        
        $course->delete();
        
        return redirect()->route('admin.courses.index')
            ->with('success', 'تم حذف الكورس بنجاح');
    }
}
