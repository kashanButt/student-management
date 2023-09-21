<?php

use App\Http\Controllers\SemesterResult;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/student-master-entry', 'student-master-entry', ['title' => 'Student Master Entry']);

Route::view('/student-semester-entry', 'semester-entry', ['title' => 'Student Result Entry']);

Route::controller(SemesterResult::class)->group(function () {
    Route::post('/semester-entry/post', 'post');
    Route::get('/student-semester-result', 'get');
    Route::post('/semester-entry/update', 'update');
    Route::post('/semester-entry/delete', 'delete');
});