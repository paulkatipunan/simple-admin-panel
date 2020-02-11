<?php

Route::group(['prefix' => 'admin'], function () {
	Route::get('/', function () {
		return view('admin.dashboard');
	})->name('admin.dashboard.index');
});