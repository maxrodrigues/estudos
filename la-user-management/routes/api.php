<?php

use App\Http\Controllers\Api\Notifications\CreateNotificationController;
use App\Http\Controllers\Api\Notifications\GetUserNotificationController;
use App\Http\Controllers\Api\Users\DeleteController;
use App\Http\Controllers\Api\Users\GetUserController;
use App\Http\Controllers\Api\Users\ListController;
use App\Http\Controllers\Api\Users\StoreController;
use App\Http\Controllers\Api\Users\UpdateController;
use App\Http\Controllers\Api\Users\UpdateStatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('user')->group(function () {
    Route::post('/', StoreController::class)->name('user.store');
    Route::get('/', ListController::class)->name('users.list');
    Route::get('/{user}', GetUserController::class)->name('users.show');
    Route::put('/{user}', UpdateController::class);
    Route::patch('/{user}/status', UpdateStatusController::class);
    Route::delete('/{user}', DeleteController::class);
});




Route::post('notification', CreateNotificationController::class);
Route::get('/user/{user}/notification', GetUserNotificationController::class);
