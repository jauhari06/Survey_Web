<?php

use App\Http\Controllers\SurveyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SubmitController;
use App\Http\Controllers\GrafikController;


Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/survey', function () {
    return view('survey');
})->name('survey');

Route::get('/charts', function () {
    return view('charts');
})->name('charts');

Route::get('/admin', function () {
    return view('admin');
})->middleware('role:admin')->name('admin');

Route::get('/superadmin/view', function () {
    return view('superadmin');
})->middleware('role:superadmin')->name('superadmin.view');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/index');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Route::get('/survey', [SurveyController::class, 'index'])->name('survey');

Route::get('/superadmin', [SuperadminController::class, 'index'])->name('superadmin');

Route::get('/superadmin/show', [SurveyController::class, 'showSuperAdmin'])->name('superadmin.show');

Route::get('/admin/show', [SurveyController::class, 'showAdmin'])->name('Admin.show');

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::post('/store-survey', [FormController::class, 'store']);

Route::delete('/questions/{id_pertanyaan}', [SurveyController::class, 'destroy'])->name('questions.destroy');

Route::get('/survey', [SurveyController::class, 'showSurvey'])->name('survey.show');

Route::get('/pertanyaan/show', [SurveyController::class, 'survey'])->name('pertanyaan.show');

Route::post('/submit-survey', [SubmitController::class, 'submitSurvey'])->name('submitSurvey');

Route::post('/submit-email', [SubmitController::class, 'submitSurvey'])->name('survey.show');

Route::get('/api/jawaban', [GrafikController::class, 'index']);

