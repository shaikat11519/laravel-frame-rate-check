<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('upload');
// });

// Route::post('/upload', [VideoController::class, 'upload']);
Route::get('/', [VideoController::class, 'index'])->name('upload.from');
Route::post('/upload-video', [VideoController::class, 'upload']);
