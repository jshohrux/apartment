<?php

use App\Http\Controllers\Admin\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\ApartmentController;

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['auth','is_admin']], function () {
        Route::get('dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('students',[StudentController::class, 'index'])->name('students');

        Route::group(['prefix' => 'faculty'], function () {
            Route::get('',[FacultyController::class, 'index'])->name('faculty');
            Route::get('create',[FacultyController::class, 'create'])->name('faculty.create');
            Route::post('store', [FacultyController::class,  'store'])->name('faculty.store');
            Route::get('edit/{id}', [FacultyController::class,  'edit'])->name('faculty.edit');
            Route::put('update/{id}', [FacultyController::class,  'update'])->name('faculty.update');
        });

        Route::group(['prefix' => 'speciality'], function () {
            Route::get('',[SpecialityController::class, 'index'])->name('speciality');
            Route::get('create',[SpecialityController::class, 'create'])->name('speciality.create');
            Route::post('store', [SpecialityController::class,  'store'])->name('speciality.store');
            Route::get('edit/{id}', [SpecialityController::class,  'edit'])->name('speciality.edit');
            Route::put('update/{id}', [SpecialityController::class,  'update'])->name('speciality.update');
        });

        Route::group(['prefix' => 'apartment'], function () {
            Route::get('',[ApartmentController::class, 'index'])->name('apartment');
            Route::get('create',[ApartmentController::class, 'create'])->name('apartment.create');
            Route::post('store', [ApartmentController::class,  'store'])->name('apartment.store');
            Route::get('edit/{id}', [ApartmentController::class,  'edit'])->name('apartment.edit');
            Route::put('update/{id}', [ApartmentController::class,  'update'])->name('apartment.update');

            Route::get('places/{id}',[ApartmentController::class, 'show_places'])->name('show_places');
            Route::get('places/{id}/add',[ApartmentController::class, 'add'])->name('add.places');
            Route::post('places/{id}/store', [ApartmentController::class, 'add_store'])->name('add.store');
        });

        Route::group(['prefix' => 'arizalar'], function () {
            Route::get('',[AdminController::class, 'arizalar'])->name('arizalar');
        });
    });
});

?>
