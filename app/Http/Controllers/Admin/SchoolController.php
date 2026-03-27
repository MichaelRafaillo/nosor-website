<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\School;
use App\Models\SchoolImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = School::latest()->paginate(15);
        return view('admin.schools.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.schools.create');
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

        $school = School::create($validated);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('schools', 'public');
                SchoolImage::create([
                    'school_id' => $school->id,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.schools.index')
            ->with('success', 'تم إنشاء المدرسة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $school = School::with('images')->findOrFail($id);
        return view('admin.schools.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $school = School::with('images')->findOrFail($id);
        return view('admin.schools.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $school = School::findOrFail($id);

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
            'delete_images.*' => 'exists:school_images,id',
        ]);

        $school->update($validated);

        // Handle image deletions
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $image = SchoolImage::find($imageId);
                if ($image) {
                    Storage::disk('public')->delete($image->image_path);
                    $image->delete();
                }
            }
        }

        // Handle new image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('schools', 'public');
                SchoolImage::create([
                    'school_id' => $school->id,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.schools.index')
            ->with('success', 'تم تحديث المدرسة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $school = School::with('images')->findOrFail($id);
        
        // Delete associated images
        foreach ($school->images as $image) {
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }
        
        $school->delete();
        
        return redirect()->route('admin.schools.index')
            ->with('success', 'تم حذف المدرسة بنجاح');
    }
}
