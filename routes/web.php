<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home.index');
// });

route::get('/',[HomeController::class,'index']);

route::post('/upload_post',[HomeController::class,'upload']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
