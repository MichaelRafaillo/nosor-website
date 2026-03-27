<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Camp;
use App\Models\CampImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CampController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $camps = Camp::latest()->paginate(15);
        return view('admin.camps.index', compact('camps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.camps.create');
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

        $camp = Camp::create($validated);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('camps', 'public');
                CampImage::create([
                    'camp_id' => $camp->id,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.camps.index')
            ->with('success', 'تم إنشاء الكامب بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $camp = Camp::with('images')->findOrFail($id);
        return view('admin.camps.show', compact('camp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $camp = Camp::with('images')->findOrFail($id);
        return view('admin.camps.edit', compact('camp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $camp = Camp::findOrFail($id);

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
            'delete_images.*' => 'exists:camp_images,id',
        ]);

        $camp->update($validated);

        // Handle image deletions
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $image = CampImage::find($imageId);
                if ($image) {
                    Storage::disk('public')->delete($image->image_path);
                    $image->delete();
                }
            }
        }

        // Handle new image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('camps', 'public');
                CampImage::create([
                    'camp_id' => $camp->id,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.camps.index')
            ->with('success', 'تم تحديث الكامب بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $camp = Camp::with('images')->findOrFail($id);
        
        // Delete associated images
        foreach ($camp->images as $image) {
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }
        
        $camp->delete();
        
        return redirect()->route('admin.camps.index')
            ->with('success', 'تم حذف الكامب بنجاح');
    }
}
