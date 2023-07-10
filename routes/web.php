<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\FacultyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('test');
})->name('bosh_sahifa');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('test', function(){
    return view('index');
})->name('test')->middleware(['auth','is_admin']);

Route::get('mening-arizalarim', [StudentController::class, 'my'])->name('my');
Route::get('ariza-yuborish',[StudentController::class, 'send_form'])->name('ariza_yuborish');
Route::post('ariza-saqlash',[StudentController::class, 'store_form'])->name('ariza_saqlash');
Route::get('mening-arizalarim/{id}', [StudentController::class, 'my_show'])->name('my_show');


Route::get('districts-regions', [RegionController::class, 'get_districts'])->name('get_districts');
Route::get('get-speciality', [FacultyController::class, 'get_speciality'])->name('get_speciality');
require __DIR__.'/admin.php';
