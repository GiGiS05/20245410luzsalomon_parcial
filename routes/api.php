<?php

use App\Http\Controllers\LeaveRequestsController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::get('/students', [StudentsController::class, 'index']);
    Route::post('/permits',[LeaveRequestsController::class,'store']);
});
