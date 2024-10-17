<?php

use App\Http\Controllers\Api\Notifications\CreateNotificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('user')->group(function () {
    Route::post('/', \App\Http\Controllers\Api\Users\StoreController::class)->name('user.store');
    Route::get('/', \App\Http\Controllers\Api\Users\ListController::class)->name('users.list');
    Route::get('/{user}', \App\Http\Controllers\Api\Users\GetUserController::class);
    Route::put('/{user}', \App\Http\Controllers\Api\Users\UpdateController::class);
    Route::patch('/{user}/status', \App\Http\Controllers\Api\Users\UpdateStatusController::class);
    Route::delete('/{user}', \App\Http\Controllers\Api\Users\DeleteController::class);
});




Route::post('notification', CreateNotificationController::class);
Route::get('/user/{user}/notification', \App\Http\Controllers\Api\Notifications\GetUserNotificationController::class);
