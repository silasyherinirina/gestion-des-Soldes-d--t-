<?php

use App\Http\Controllers\Api\ProductController;

Route::apiResource('products', ProductController::class);

// Route test
Route::get('/ping', fn () => ['status' => 'ok']);
