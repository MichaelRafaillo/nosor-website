<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use App\Models\Camp;
use App\Models\Course;
use App\Models\Event;
use App\Models\School;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $defaultPillarImages = [
        'schools' => asset('assets/img/cat-1.jpg'),
        'events' => asset('assets/img/cat-2.jpg'),
        'camps' => asset('assets/img/cat-3.jpg'),
        'courses' => asset('assets/img/cat-4.jpg'),
    ];

    $pillarImages = Cache::remember('home.pillar_images', now()->addMinutes(10), function () use ($defaultPillarImages) {
        try {
            $school = School::where('status', 'active')->with('images')->latest()->first();
            $event = Event::where('status', 'active')->with('images')->latest()->first();
            $camp = Camp::where('status', 'active')->with('images')->latest()->first();
            $course = Course::where('status', 'active')->with('images')->latest()->first();

            return [
                'schools' => $school && $school->images->isNotEmpty()
                    ? asset('storage/' . $school->images->first()->image_path)
                    : $defaultPillarImages['schools'],
                'events' => $event && $event->images->isNotEmpty()
                    ? asset('storage/' . $event->images->first()->image_path)
                    : $defaultPillarImages['events'],
                'camps' => $camp && $camp->images->isNotEmpty()
                    ? asset('storage/' . $camp->images->first()->image_path)
                    : $defaultPillarImages['camps'],
                'courses' => $course && $course->images->isNotEmpty()
                    ? asset('storage/' . $course->images->first()->image_path)
                    : $defaultPillarImages['courses'],
            ];
        } catch (\Throwable $exception) {
            report($exception);
            return $defaultPillarImages;
        }
    });

    return view('home', compact('pillarImages'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Routes
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

// Schools Routes
Route::get('/schools', [\App\Http\Controllers\SchoolController::class, 'index'])->name('schools.index');
Route::get('/schools/{id}', [\App\Http\Controllers\SchoolController::class, 'show'])->name('schools.show');

// Events Routes
Route::get('/events', [\App\Http\Controllers\EventController::class, 'index'])->name('events.index');
Route::get('/events/{id}', [\App\Http\Controllers\EventController::class, 'show'])->name('events.show');

// Camps Routes
Route::get('/camps', [\App\Http\Controllers\CampController::class, 'index'])->name('camps.index');
Route::get('/camps/{id}', [\App\Http\Controllers\CampController::class, 'show'])->name('camps.show');

// Courses Routes
Route::get('/courses', [\App\Http\Controllers\CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{id}', [\App\Http\Controllers\CourseController::class, 'show'])->name('courses.show');

// Calendar Routes
Route::get('/calendar', [\App\Http\Controllers\CalendarController::class, 'index'])->name('calendar.index');
Route::get('/calendar/events', [\App\Http\Controllers\CalendarController::class, 'getEvents'])->name('calendar.events');

// Authentication Routes
Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Admin Routes (Protected)
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('events', \App\Http\Controllers\Admin\EventController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);
    Route::resource('schools', \App\Http\Controllers\Admin\SchoolController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);
    Route::resource('camps', \App\Http\Controllers\Admin\CampController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);
    Route::resource('courses', \App\Http\Controllers\Admin\CourseController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);
    Route::resource('contact-messages', \App\Http\Controllers\Admin\ContactMessageController::class)->only(['index', 'show', 'destroy']);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->only(['index', 'create', 'store']);
});
