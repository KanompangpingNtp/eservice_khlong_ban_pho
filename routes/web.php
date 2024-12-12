<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserGeneralRequestsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminGeneralRequestsController;
use App\Http\Controllers\UserElderlyAllowanceController;
use App\Http\Controllers\AdminElderlyAllowanceController;

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
    return view('home.first-page');
});

//users GeneralRequests
Route::get('/GeneralRequests', [UserGeneralRequestsController::class, 'UsersFormPage'])->name('UsersFormPage');
Route::post('/form/create', [UserGeneralRequestsController::class, 'FormCreate'])->name('FormCreate');

//users elderly_allowance
Route::get('/ElderlyAllowance', [UserElderlyAllowanceController::class, 'ElderlyAllowanceFormPage'])->name('ElderlyAllowanceFormPage');
Route::post('/ElderlyAllowance/form/create', [UserElderlyAllowanceController::class, 'ElderlyAllowanceFormCreate'])->name('ElderlyAllowanceFormCreate');

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
    Route::post('/TablePages/AdminReply/{id}', [AdminGeneralRequestsController::class, 'AdminReply'])->name('AdminReply');
    Route::post('/TablePages/{id}/update-status', [AdminGeneralRequestsController::class, 'updateStatus'])->name('updateStatus');

    //elderly_allowance
    Route::get('/TablePages/ElderlyAllowance', [AdminElderlyAllowanceController::class, 'TableElderlyAllowancePages'])->name('TableElderlyAllowancePages');
    Route::get('/TablePages/ElderlyAllowance/ShowFormEdit/{id}', [AdminElderlyAllowanceController::class, 'ElderlyAllowanceShowEdit'])->name('ElderlyAllowanceShowEdit');
    Route::put('/TablePages/ElderlyAllowance/{id}/Update', [AdminElderlyAllowanceController::class, 'ElderlyAllowanceFormUpdate'])->name('ElderlyAllowanceFormUpdate');
    Route::get('/TablePages/ElderlyAllowance/ExportPdf/{id}', [AdminElderlyAllowanceController::class, 'ElderlyAllowanceExportPDF'])->name('ElderlyAllowanceExportPDF');
    Route::post('/TablePages/ElderlyAllowance/{id}/update-status', [AdminElderlyAllowanceController::class, 'ElderlyAllowanceUpdateStatus'])->name('ElderlyAllowanceUpdateStatus');
    Route::post('/TablePages/ElderlyAllowance/AdminReply/{id}', [AdminElderlyAllowanceController::class, 'ElderlyAllowanceAdminReply'])->name('ElderlyAllowanceAdminReply');
});

Route::middleware(['user'])->group(function () {
    //user GeneralRequests
    Route::get('/user/account', [UserGeneralRequestsController::class, 'UsersAccountFormPage'])->name('UsersAccountFormPage');
    Route::get('/user/account/record', [UserGeneralRequestsController::class, 'userRecordForm'])->name('userRecordForm');
    Route::post('/user/account/{form}/reply', [UserGeneralRequestsController::class, 'userReply'])->name('userReply');
    Route::get('/user/account/export/{id}', [UserGeneralRequestsController::class, 'exportUserPDF'])->name('exportUserPDF');
    Route::get('/user/account/{id}/edit', [UserGeneralRequestsController::class, 'userShowFormEdit'])->name('userShowFormEdit');
    Route::put('/user/account/{id}', [UserGeneralRequestsController::class, 'updateUserForm'])->name('updateUserForm');

    //users elderly_allowance
    Route::get('/user/account/ElderlyAllowance', [UserElderlyAllowanceController::class, 'ElderlyAllowanceUsersAccountFormPage'])->name('ElderlyAllowanceUsersAccountFormPage');
    Route::get('/user/account/ElderlyAllowance/record', [UserElderlyAllowanceController::class, 'TableElderlyAllowanceUsersPages'])->name('TableElderlyAllowanceUsersPages');
    Route::get('/user/account/ElderlyAllowance/{id}/edit', [UserElderlyAllowanceController::class, 'ElderlyAllowanceUserShowEdit'])->name('ElderlyAllowanceUserShowEdit');
    Route::put('/user/account/ElderlyAllowance/{id}/Update', [UserElderlyAllowanceController::class, 'ElderlyAllowanceFormUserUpdate'])->name('ElderlyAllowanceFormUserUpdate');
    Route::post('/user/account/ElderlyAllowance/{form}/reply', [UserElderlyAllowanceController::class, 'ElderlyAllowanceUserReply'])->name('ElderlyAllowanceUserReply');
    Route::get('/user/account/ElderlyAllowance/{id}/pdf', [UserElderlyAllowanceController::class, 'ElderlyAllowanceUserExportPDF'])->name('ElderlyAllowanceUserExportPDF');
});
