<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\School;
use App\Models\Camp;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CalendarController extends Controller
{
    /**
     * Display the calendar page.
     */
    public function index()
    {
        return view('calendar.index');
    }

    /**
     * Get all active items with dates for the calendar.
     */
    public function getEvents(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');

        $events = [];

        // Get Events
        $eventItems = Event::where('status', 'active')
            ->whereNotNull('date')
            ->when($start && $end, function($query) use ($start, $end) {
                return $query->whereBetween('date', [$start, $end]);
            })
            ->get();

        foreach ($eventItems as $event) {
            $events[] = [
                'id' => 'event-' . $event->id,
                'title' => $event->title,
                'start' => $event->date->format('Y-m-d'),
                'end' => $event->date->format('Y-m-d'),
                'url' => route('events.show', $event->id),
                'color' => '#0d6efd', // Primary blue
                'type' => 'event',
                'description' => $event->desc ? Str::limit($event->desc, 100) : null,
            ];
        }

        // Get Schools
        $schoolItems = School::where('status', 'active')
            ->whereNotNull('date')
            ->when($start && $end, function($query) use ($start, $end) {
                return $query->whereBetween('date', [$start, $end]);
            })
            ->get();

        foreach ($schoolItems as $school) {
            $events[] = [
                'id' => 'school-' . $school->id,
                'title' => $school->title,
                'start' => $school->date->format('Y-m-d'),
                'end' => $school->date->format('Y-m-d'),
                'url' => route('schools.show', $school->id),
                'color' => '#198754', // Success green
                'type' => 'school',
                'description' => $school->desc ? Str::limit($school->desc, 100) : null,
            ];
        }

        // Get Camps
        $campItems = Camp::where('status', 'active')
            ->whereNotNull('date')
            ->when($start && $end, function($query) use ($start, $end) {
                return $query->whereBetween('date', [$start, $end]);
            })
            ->get();

        foreach ($campItems as $camp) {
            $events[] = [
                'id' => 'camp-' . $camp->id,
                'title' => $camp->title,
                'start' => $camp->date->format('Y-m-d'),
                'end' => $camp->date->format('Y-m-d'),
                'url' => route('camps.show', $camp->id),
                'color' => '#fd7e14', // Warning orange
                'type' => 'camp',
                'description' => $camp->desc ? Str::limit($camp->desc, 100) : null,
            ];
        }

        // Get Courses
        $courseItems = Course::where('status', 'active')
            ->whereNotNull('date')
            ->when($start && $end, function($query) use ($start, $end) {
                return $query->whereBetween('date', [$start, $end]);
            })
            ->get();

        foreach ($courseItems as $course) {
            $events[] = [
                'id' => 'course-' . $course->id,
                'title' => $course->title,
                'start' => $course->date->format('Y-m-d'),
                'end' => $course->date->format('Y-m-d'),
                'url' => route('courses.show', $course->id),
                'color' => '#dc3545', // Danger red
                'type' => 'course',
                'description' => $course->desc ? Str::limit($course->desc, 100) : null,
            ];
        }

        return response()->json($events);
    }
}
