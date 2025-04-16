<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::get('/page', PageController::class)->name('page');
