<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\facultycontroller;

use App\Http\Controllers\studentcontroller;

use App\Http\Controllers\bookcontroller;

use App\Http\Controllers\buscontroller;




Route::get("/", [facultycontroller::class, 'create' ]);

Route::get('/student', [studentcontroller::class, 'create' ]);

Route::get("/busadd", [buscontroller::class, 'create' ]);

Route::post('/facultyread',[facultycontroller::class, 'store']);

Route::post('/busread',[buscontroller::class, 'store']);

Route::post('/studentread',[studentcontroller::class, 'store']);

Route::get("/book", [bookcontroller::class, 'create' ]);

Route::post('/bookread',[bookcontroller::class, 'store']);