<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use Illuminate\Http\Request;

class CampController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $camps = Camp::where('status', 'active')
            ->with('images')
            ->latest()
            ->paginate(12);
        
        return view('camps.index', compact('camps'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $camp = Camp::where('status', 'active')
            ->with('images')
            ->findOrFail($id);
        
        return view('camps.show', compact('camp'));
    }
}
