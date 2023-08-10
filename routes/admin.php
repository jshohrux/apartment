<?php

use App\Http\Controllers\Admin\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\DistrictController;

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['auth','is_admin']], function () {
        Route::get('dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('students',[StudentController::class, 'index'])->name('students');
        Route::get('students/{id}',[StudentController::class, 'edit'])->name('student.edit');
        Route::put('change-role',[StudentController::class, 'change_role'])->name('change_role');

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
            Route::get('places/{id}/edit/{place}',[ApartmentController::class, 'places_edit'])->name('add.edit');
            Route::put('places/{id}/update/{place}',[ApartmentController::class, 'places_update'])->name('add.update');
            Route::get('places/{id}/delete/{place}',[ApartmentController::class, 'delete'])->name('add.delete');
        });

        Route::group(['prefix' => 'arizalar'], function () {
            Route::get('',[AdminController::class, 'arizalar'])->name('arizalar');
            Route::get('edit/{id}', [AdminController::class, 'edit'])->name('ariza_edit');
            Route::put('update/{id}', [AdminController::class, 'update'])->name('ariza_update');

            Route::get('new',[AdminController::class, 'new'])->name('new');
            Route::get('accepted',[AdminController::class, 'accepted'])->name('accepted');
            Route::get('rejected',[AdminController::class, 'rejected'])->name('rejected');

            Route::get('yangi-arizalar', [AdminController::class, 'new_arizalar'])->name('new_arizalar');
        });


        Route::group(['prefix' => 'regions'], function () {
            Route::get('',[RegionController::class, 'index'])->name('regions');
            Route::get('create',[RegionController::class, 'create'])->name('regions.create');
            Route::post('store', [RegionController::class,  'store'])->name('regions.store');
            Route::get('edit/{id}', [RegionController::class,  'edit'])->name('regions.edit');
            Route::put('update/{id}', [RegionController::class,  'update'])->name('regions.update');
        });

        Route::group(['prefix' => 'districts'], function () {
            Route::get('',[DistrictController::class, 'index'])->name('districts');
            Route::get('create',[DistrictController::class, 'create'])->name('districts.create');
            Route::post('store', [DistrictController::class,  'store'])->name('districts.store');
            Route::get('edit/{id}', [DistrictController::class,  'edit'])->name('districts.edit');
            Route::put('update/{id}', [DistrictController::class,  'update'])->name('districts.update');
        });

        Route::group(['prefix' => 'meyoriy-hujjatlar'], function () {
            Route::get('',[AdminController::class, 'documents_all'])->name('documents_all');
            Route::get('create',[AdminController::class, 'documents_create'])->name('documents.create');
            Route::post('store', [AdminController::class,  'documents_store'])->name('documents.store');
            Route::get('edit/{id}', [AdminController::class,  'documents_edit'])->name('documents.edit');
            Route::put('update/{id}', [AdminController::class,  'documents_update'])->name('documents.update');
        });
        Route::get('get-places',[ApartmentController::class, 'get_places'])->name('places');

        Route::get('viloyatlar-kesimida',[AdminController::class, 'all_regions'])->name('all_regions');
        Route::get('fakultetlar-kesimida',[AdminController::class, 'all_faculty'])->name('all_faculty');
        Route::get('kurslar-kesimida',[AdminController::class, 'all_course'])->name('all_course');
    });
});

?>
