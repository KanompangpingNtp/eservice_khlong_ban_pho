<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserGeneralRequestsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminGeneralRequestsController;

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

Route::get('/dashboardex', function () {
    return view('dashboard.dashboardEx');
});

//users form
Route::get('/', [UserGeneralRequestsController::class, 'UsersFormPage'])->name('UsersFormPage');
Route::post('/form/create', [UserGeneralRequestsController::class, 'FormCreate'])->name('FormCreate');

//auth
Route::get('/login', [AuthController::class, 'LoginPage'])->name('LoginPage');
Route::get('/register', [AuthController::class, 'RegisterPage'])->name('RegisterPage');

//admin GeneralRequests
Route::get('/TablePages', [AdminGeneralRequestsController::class, 'TablePages'])->name('TablePages');
Route::get('/TablePages/ShowFormEdit/{id}', [AdminGeneralRequestsController::class, 'ShowFormEdit'])->name('ShowFormEdit');
Route::put('/TablePages/ShowFormEdit/{id}/Update', [AdminGeneralRequestsController::class, 'FormEdit'])->name('FormEdit');
