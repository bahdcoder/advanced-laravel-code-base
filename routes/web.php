<?php

use App\Http\Controllers\PodcastController;
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
    return view('welcome');
});

Route::get('/dashboard', [PodcastController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/dashboard/podcasts/create', [PodcastController::class, 'create'])
    ->name('podcasts.create')
    ->middleware(['auth']);

Route::post('/dashboard/podcasts/store', [PodcastController::class, 'store'])
    ->name('podcasts.store')
    ->middleware(['auth']);

require __DIR__.'/auth.php';
