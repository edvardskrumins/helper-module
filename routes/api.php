<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::prefix('helper-module')->group(function () {
    Route::get('/health', function () {
        $status = [
            'status' => 'ok',
            'timestamp' => now()->toIso8601String(),
            'memory_usage' => memory_get_usage(),
            'memory_limit' => ini_get('memory_limit'),
            'database' => DB::connection()->getPdo() ? 'connected' : 'disconnected',
        ];

        return response()->json($status);
    });
});
