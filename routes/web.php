<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->name('admin.')
    ->group(base_path('routes/admin.php'));

// Route::get('/', function () {
//     return view('test');
// });
