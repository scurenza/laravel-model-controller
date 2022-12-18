<?php

use App\Http\Controllers\Guest\PageController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/', [PageController::class, 'index'])->name('home');

// Route::get('/', function () {
//     $movies = config('movies');
//     return view('home', compact('movies'));
// });

Route::get('/{movie}', function ($movieIndex) {
    $movies = config('movies');
    if ($movieIndex >= 0) {
        $singleMovie = $movies[$movieIndex];
        return view('movies.show', compact('singleMovie'));
    } else {
        return abort(404);
    }
})->name('movies.show');
