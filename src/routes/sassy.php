<?php

use Illuminate\Support\Facades\Route;
use Stupidly\Sassy\App\Http\Controllers\PageController;
use Stupidly\Sassy\App\Http\Middleware\IsSassyAdmin;
use Stupidly\Sassy\App\Http\Controllers\Admin\AdminController;

Route::prefix('admin')->name('admin.')->middleware([IsSassyAdmin::class])->group(function() {

    Route::get('/', [AdminController::class, 'index'])->name('index');

});

Route::get('/{page:slug}', [PageController::class, 'show'])->name('page.show');
