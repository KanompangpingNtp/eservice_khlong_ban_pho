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
Route::post('/register', [AuthController::class, 'Register'])->name('Register');
Route::post('/login', [AuthController::class, 'Login'])->name('Login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['admin'])->group(function () {
    //admin GeneralRequests
    Route::get('/TablePages', [AdminGeneralRequestsController::class, 'TablePages'])->name('TablePages');
    Route::get('/TablePages/ShowFormEdit/{id}', [AdminGeneralRequestsController::class, 'ShowFormEdit'])->name('ShowFormEdit');
    Route::put('/TablePages/ShowFormEdit/{id}/Update', [AdminGeneralRequestsController::class, 'FormEdit'])->name('FormEdit');
    Route::get('/TablePages/ExportPdf/{id}', [AdminGeneralRequestsController::class, 'exportPDF'])->name('exportPDF');
    Route::post('/TablePages/ExportPdf/{id}/UpdateStatus', [AdminGeneralRequestsController::class, 'updateStatus'])->name('updateStatus');
    Route::post('/TablePages/AdminReply/{id}', [AdminGeneralRequestsController::class, 'AdminReply'])->name('AdminReply');
    Route::post('/TablePages/{id}/update-status', [AdminGeneralRequestsController::class, 'updateStatus'])->name('updateStatus');
    //end admin GeneralRequests
});

Route::middleware(['user'])->group(function () {
    //user GeneralRequests
    Route::get('/user/account', [UserGeneralRequestsController::class, 'UsersAccountFormPage'])->name('UsersAccountFormPage');
    Route::get('/user/account/record', [UserGeneralRequestsController::class, 'userRecordForm'])->name('userRecordForm');
    Route::post('/user/account/{form}/reply', [UserGeneralRequestsController::class, 'userReply'])->name('userReply');
    Route::get('/user/account/export/{id}', [UserGeneralRequestsController::class, 'exportUserPDF'])->name('exportUserPDF');
    Route::get('/user/account/{id}/edit', [UserGeneralRequestsController::class, 'userShowFormEdit'])->name('userShowFormEdit');
    Route::put('/user/account/{id}', [UserGeneralRequestsController::class, 'updateUserForm'])->name('updateUserForm');
    //end user GeneralRequests
});
