<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = School::where('status', 'active')
            ->with('images')
            ->latest()
            ->paginate(12);
        
        return view('schools.index', compact('schools'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $school = School::where('status', 'active')
            ->with('images')
            ->findOrFail($id);
        
        return view('schools.show', compact('school'));
    }
}
