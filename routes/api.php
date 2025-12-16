<?php

use Illuminate\Support\Facades\Route;


Route::prefix('helper-module')->group(function () {
    Route::get('/health', function () {
      return response()->json([
          'module' => 'helper-module',
          'message' => 'Helper module routes are loaded successfully!',
      ]);
    });
});
