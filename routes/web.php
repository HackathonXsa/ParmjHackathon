<?php

use App\Http\Controllers\emailNotificationController;
use App\Http\Controllers\HackathonChallengesController;
use App\Http\Controllers\HackathonController;
use App\Http\Controllers\HackathonFieldsController;
use App\Http\Controllers\HackathonPagesController;
use App\Http\Controllers\HackathonTimelinesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Models\HackathonUsers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Route::get('/hackathon', function () {
//     return view('hackathon');
// })->name('home.hackathon');

Route::get('/{hackathon}/hackathon', [HackathonPagesController::class, 'home'])->name('home.hackathon');

Route::get('/{hackathon}/joinus', [HackathonPagesController::class, 'joinus'])->name('joinus.hackathon');
Route::post('/{hackathon}/joinus', [HackathonPagesController::class, 'joinus_store'])->name('joinus_store.hackathon');


Route::get('/signin', function () {
    return view('signin');
})->name('signin');
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/all-csv', function () {
        $headers = [
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
        ,   'Content-type'        => 'text/csv'
        ,   'Content-Disposition' => 'attachment; filename=hackathon_users.csv'
        ,   'Expires'             => '0'
        ,   'Pragma'              => 'public'
        ];

        $list = HackathonUsers::all()->toArray();;

        # add headers for each column in the CSV download
        array_unshift($list, array_keys($list[0]));

        $callback = function () use ($list) {
            $FH = fopen('php://output', 'w');
            foreach ($list as $row) {
                fputcsv($FH, $row);
            }
            fclose($FH);
        };

        return response()->stream($callback, 200, $headers);
    });
    Route::get('/sendEmails', [emailNotificationController::class, 'sendEmailNotificationView']);
    Route::post('/sendEmails', [emailNotificationController::class, 'sendEmailNotification']);

    Route::get('/user/{user}/profile', [UserController::class, 'show'])->name('user.profile.show');
    Route::get('/hackathons', [HackathonController::class, 'index'])->name('hackathon.index');
    Route::get('/hackthons/create', [HackathonController::class, 'create'])->name('hackathon.create');
    Route::post('/hackthons/store', [HackathonController::class, 'store'])->name('hackathon.store');
    Route::get('/hackathons/{hackathon}/edit', [HackathonController::class, 'edit'])->name('hackathon.edit');
    Route::patch('/hackathons/{hackathon}/update', [HackathonController::class, 'update'])->name('hackathon.update');
    Route::delete('/hackathons/{hackathon}/destroy', [HackathonController::class, 'destroy'])->middleware('can:delete,hackathon')->name('hackathon.destroy');

    Route::get('/hackathons/page/{hackathon}', [HackathonPagesController::class, 'edit'])->name('hackathon.page.edit');
    Route::patch('/hackathons/page/update/{hackathon}', [HackathonPagesController::class, 'update'])->name('hackathon.page.update');

    Route::post('/hackathons/challenges/store', [HackathonChallengesController::class, 'store'])->name('hackathons.challenges.store');
    Route::patch('/hackathons/challenges/{hackathon}/update', [HackathonChallengesController::class, 'update'])->name('hackathons.challenges.update');
    Route::delete('/hackathons/challenges/{hackathon}/delete', [HackathonChallengesController::class, 'destroy'])->name('hackathons.challenges.delete');

    Route::post('/hackathons/fields/store', [HackathonFieldsController::class, 'store'])->name('hackathons.fields.store');
    Route::patch('/hackathons/fields/{hackathon}/update', [HackathonFieldsController::class, 'update'])->name('hackathons.fields.update');
    Route::delete('/hackathons/fields/{hackathon}/delete', [HackathonFieldsController::class, 'destroy'])->name('hackathons.fields.delete');

    Route::post('/hackathons/timelines/store', [HackathonTimelinesController::class, 'store'])->name('hackathons.timelines.store');
    Route::patch('/hackathons/timelines/{hackathon}/update', [HackathonTimelinesController::class, 'update'])->name('hackathons.timelines.update');
    Route::delete('/hackathons/timelines/{hackathon}/delete', [HackathonTimelinesController::class, 'destroy'])->name('hackathons.timelines.delete');
});
