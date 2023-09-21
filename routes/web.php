<?php

use App\Http\Controllers\SemesterResult;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index', ['title' => 'Student Management']);

Route::view('/student-master-entry', 'student-master-entry', ['title' => 'Student Master Entry']);

Route::view('/student-semester-entry', 'semester-entry', ['title' => 'Student Result Entry']);

Route::controller(SemesterResult::class)->group(function () {
    Route::post('/semester-entry/post', 'post');
    Route::get('/student-semester-result', 'get');
    Route::get('/semester-entry/update/{id}', 'single');
    Route::post('/update-semester-entry/{id}', 'update');
    Route::get('/semester-entry/delete/{id}', 'delete');
});