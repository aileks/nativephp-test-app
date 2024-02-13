<?php

use Illuminate\Support\Facades\Route;
use Native\Laravel\Facades\Window;

Route::get('/', function () {
    if (request()->openwindow) {
        Window::open('about')
            ->route('about')
            ->width(800)
            ->height(800)
            ->showDevTools(false)
            ->rememberState();
    }

    return view('welcome');
});

Route::view('/about', 'about')->name('about');
