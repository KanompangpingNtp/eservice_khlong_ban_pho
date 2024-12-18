<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserGeneralRequestsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminGeneralRequestsController;
use App\Http\Controllers\UserElderlyAllowanceController;
use App\Http\Controllers\AdminElderlyAllowanceController;
use App\Http\Controllers\UserDisabilityController;
use App\Http\Controllers\AdminDisabilityController;
use App\Http\Controllers\UserChildApplyController;
use App\Http\Controllers\AdminChildApplyController;
use App\Http\Controllers\UserReceiveAssistanceController;
use App\Http\Controllers\AdminReceiveAssistanceController;
use App\Http\Controllers\UserTradeRegistryController;
use App\Http\Controllers\AdminTradeRegistryController;
use App\Http\Controllers\UserCertificationController;
use App\Http\Controllers\AdminCertificationController;
use App\Http\Controllers\UserLicenseController;

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
})->name('home.first-page');

Route::get('/index', function () {
    return view('home.index');
})->name('home.index');

//users GeneralRequests
Route::get('/GeneralRequests', [UserGeneralRequestsController::class, 'UsersFormPage'])->name('UsersFormPage');
Route::post('/form/create', [UserGeneralRequestsController::class, 'FormCreate'])->name('FormCreate');

//users elderly_allowance
Route::get('/ElderlyAllowance', [UserElderlyAllowanceController::class, 'ElderlyAllowanceFormPage'])->name('ElderlyAllowanceFormPage');
Route::post('/ElderlyAllowance/form/create', [UserElderlyAllowanceController::class, 'ElderlyAllowanceFormCreate'])->name('ElderlyAllowanceFormCreate');

//users disability
Route::get('/Disability', [UserDisabilityController::class, 'DisabilityFormPage'])->name('DisabilityFormPage');
Route::post('/Disability/form/create', [UserDisabilityController::class, 'DisabilityFormCreate'])->name('DisabilityFormCreate');

//User ChildApply
Route::get('/ChildApply', [UserChildApplyController::class, 'ChildApplyPage'])->name('ChildApplyPage');
Route::post('/ChildApply/form/create', [UserChildApplyController::class, 'ChildApplyFormCreate'])->name('ChildApplyFormCreate');

//user ReceiveAssistance
Route::get('/ReceiveAssistance', [UserReceiveAssistanceController::class, 'ReceiveAssistanceFormPage'])->name('ReceiveAssistanceFormPage');
Route::post('/ReceiveAssistance/form/create', [UserReceiveAssistanceController::class, 'ReceiveAssistanceFormCreate'])->name('ReceiveAssistanceFormCreate');

//users TradeRegistry
Route::get('/TradeRegistry', [UserTradeRegistryController::class, 'TradeRegistryFormPage'])->name('TradeRegistryFormPage');
Route::post('/TradeRegistry/form/create', [UserTradeRegistryController::class, 'TradeRegistryFormCreate'])->name('TradeRegistryFormCreate');

//users Certification
Route::get('/Certification', [UserCertificationController::class, 'UserCertificationFormPage'])->name('UserCertificationFormPage');
Route::post('/Certification/form/create', [UserCertificationController::class, 'CertificationFormCreate'])->name('CertificationFormCreate');

//users License
Route::get('/License', [UserLicenseController::class, 'UserLicenseFormPage'])->name('UserLicenseFormPage');
Route::post('/License/form/create', [UserLicenseController::class, 'LicenseFormCreate'])->name('LicenseFormCreate');

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

    //admin disability
    Route::get('/TablePages/Disability', [AdminDisabilityController::class, 'TableDisabilityPages'])->name('TableDisabilityPages');
    Route::get('/TablePages/Disability/ShowFormEdit/{id}', [AdminDisabilityController::class, 'DisabilityShowEdit'])->name('DisabilityShowEdit');
    Route::put('/TablePages/Disability/{id}/Update', [AdminDisabilityController::class, 'DisabilityFormUpdate'])->name('DisabilityFormUpdate');
    Route::get('/TablePages/Disability/ExportPdf/{id}', [AdminDisabilityController::class, 'DisabilityExportPDF'])->name('DisabilityExportPDF');
    Route::post('/TablePages/Disability/{id}/update-status', [AdminDisabilityController::class, 'DisabilityUpdateStatus'])->name('DisabilityUpdateStatus');
    Route::post('/TablePages/Disability/AdminReply/{id}', [AdminDisabilityController::class, 'DisabilityReply'])->name('DisabilityReply');

    //admin ChildApply
    Route::get('/TablePages/ChildApply', [AdminChildApplyController::class, 'TableChildApplyAdminPages'])->name('TableChildApplyAdminPages');
    Route::get('/TablePages/ChildApply/ExportPdf/{id}', [AdminChildApplyController::class, 'ChildApplyAdminExportPDF'])->name('ChildApplyAdminExportPDF');
    Route::post('/TablePages/ChildApply/AdminReply/{id}', [AdminChildApplyController::class, 'ChildApplyAdminReply'])->name('ChildApplyAdminReply');
    Route::post('/TablePages/ChildApply/{id}/update-status', [AdminChildApplyController::class, 'ChildApplyUpdateStatus'])->name('ChildApplyUpdateStatus');

    //admin ReceiveAssistance
    Route::get('/TablePages/ReceiveAssistance', [AdminReceiveAssistanceController::class, 'TableReceiveAssistanceAdminPages'])->name('TableReceiveAssistanceAdminPages');
    Route::post('/TablePages/ReceiveAssistance/AdminReply/{id}', [AdminReceiveAssistanceController::class, 'ReceiveAssistanceAdminReply'])->name('ReceiveAssistanceAdminReply');
    Route::get('/TablePages/ReceiveAssistance/ExportPdf/{id}', [AdminReceiveAssistanceController::class, 'ReceiveAssistanceAdminExportPDF'])->name('ReceiveAssistanceAdminExportPDF');
    Route::post('/TablePages/ReceiveAssistance/{id}/update-status', [AdminReceiveAssistanceController::class, 'ReceiveAssistanceUpdateStatus'])->name('ReceiveAssistanceUpdateStatus');

    //admin TradeRegistry
    Route::get('/TablePages/TradeRegistry', [AdminTradeRegistryController::class, 'TableTradeRegistryAdminPages'])->name('TableTradeRegistryAdminPages');
    Route::post('/TablePages/TradeRegistry/AdminReply/{id}', [AdminTradeRegistryController::class, 'TradeRegistryUpdateStatus'])->name('TradeRegistryUpdateStatus');
    Route::post('/TablePages/TradeRegistry/{id}/update-status', [AdminTradeRegistryController::class, 'TradeRegistryAdminReply'])->name('TradeRegistryAdminReply');
    Route::get('/TablePages/TradeRegistry/ExportPdf/{id}', [AdminTradeRegistryController::class, 'TradeRegistryAdminExportPDF'])->name('TradeRegistryAdminExportPDF');

    //admin Certification
    Route::get('/TablePages/Certification', [AdminCertificationController::class, 'TableCertificationAdminPages'])->name('TableCertificationAdminPages');
    Route::get('/TablePages/Certification/ExportPdf/{id}', [AdminCertificationController::class, 'CertificationAdminExportPDF'])->name('CertificationAdminExportPDF');
    Route::post('/TablePages/Certification/AdminReply/{id}', [AdminCertificationController::class, 'CertificationAdminReply'])->name('CertificationAdminReply');
    Route::post('/TablePages/Certification/{id}/update-status', [AdminCertificationController::class, 'CertificationUpdateStatus'])->name('CertificationUpdateStatus');
});

Route::middleware(['user'])->group(function () {
    Route::get('/users/account/index', function () {
        return view('dashboard.layout.users.users_account_index');
    })->name('users.account.index');

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

    //users disability
    Route::get('/user/account/Disability', [UserDisabilityController::class, 'DisabilityUsersAccountFormPage'])->name('DisabilityUsersAccountFormPage');
    Route::get('/user/account/Disability/record', [UserDisabilityController::class, 'TableDisabilityUsersPages'])->name('TableDisabilityUsersPages');
    Route::get('/user/account/Disability/{id}/edit', [UserDisabilityController::class, 'DisabilityUserShowEdit'])->name('DisabilityUserShowEdit');
    Route::put('/user/account/Disability/{id}/Update', [UserDisabilityController::class, 'DisabilityUserFormUpdate'])->name('DisabilityUserFormUpdate');
    Route::get('/user/account/Disability/{id}/pdf', [UserDisabilityController::class, 'DisabilityUserExportPDF'])->name('DisabilityUserExportPDF');
    Route::post('/user/account/Disability/{form}/reply', [UserDisabilityController::class, 'DisabilityUserReply'])->name('DisabilityUserReply');

    //users ChildApply
    Route::get('/user/account/ChildApply', [UserChildApplyController::class, 'ChildApplyFormPage'])->name('ChildApplyFormPage');
    Route::get('/user/account/ChildApply/record', [UserChildApplyController::class, 'TableChildApplyUsersPages'])->name('TableChildApplyUsersPages');
    Route::get('/user/account/ChildApply/{id}/edit', [UserChildApplyController::class, 'ChildApplyUserShowFormEdit'])->name('ChildApplyUserShowFormEdit');
    Route::put('/user/account/ChildApply/{id}/Update', [UserChildApplyController::class, 'updateChildInformation'])->name('updateChildInformation');
    Route::get('/user/account/ChildApply/{id}/pdf', [UserChildApplyController::class, 'ChildApplyUserExportPDF'])->name('ChildApplyUserExportPDF');
    Route::post('/user/account/ChildApply/{form}/reply', [UserChildApplyController::class, 'ChildApplyUserReply'])->name('ChildApplyUserReply');

    //users ReceiveAssistance
    Route::get('/user/account/ReceiveAssistance', [UserReceiveAssistanceController::class, 'ReceiveAssistanceUserFormPage'])->name('ReceiveAssistanceUserFormPage');
    Route::get('/user/account/ReceiveAssistance/record', [UserReceiveAssistanceController::class, 'TableReceiveAssistanceUsersPages'])->name('TableReceiveAssistanceUsersPages');
    Route::post('/user/account/ReceiveAssistance/{form}/reply', [UserReceiveAssistanceController::class, 'ReceiveAssistanceUserReply'])->name('ReceiveAssistanceUserReply');
    Route::get('/user/account/ReceiveAssistance/{id}/pdf', [UserReceiveAssistanceController::class, 'ReceiveAssistanceUserExportPDF'])->name('ReceiveAssistanceUserExportPDF');
    Route::get('/user/account/ReceiveAssistance/{id}/edit', [UserReceiveAssistanceController::class, 'ReceiveAssistanceUsersShowFormEdit'])->name('ReceiveAssistanceUsersShowFormEdit');
    Route::put('/user/account/ReceiveAssistance/{id}/Update', [UserReceiveAssistanceController::class, 'updateReceiveAssistance'])->name('updateReceiveAssistance');

    //users TradeRegistry
    Route::get('/user/account/TradeRegistry', [UserTradeRegistryController::class, 'TradeRegistryUserFormPage'])->name('TradeRegistryUserFormPage');
    Route::get('/user/account/TradeRegistry/record', [UserTradeRegistryController::class, 'TableTradeRegistryUsersPages'])->name('TableTradeRegistryUsersPages');
    Route::get('/user/account/TradeRegistry/{id}/edit', [UserTradeRegistryController::class, 'TradeRegistryShowFormEdit'])->name('TradeRegistryShowFormEdit');
    Route::put('/user/account/TradeRegistry/{id}/Update', [UserTradeRegistryController::class, 'TradeRegistryUserFormUpdate'])->name('TradeRegistryUserFormUpdate');
    Route::get('/user/account/TradeRegistry/{id}/pdf', [UserTradeRegistryController::class, 'TradeRegistryUserExportPDF'])->name('TradeRegistryUserExportPDF');
    Route::post('/user/account/TradeRegistry/{form}/reply', [UserTradeRegistryController::class, 'TradeRegistryUserReply'])->name('TradeRegistryUserReply');

    //users Certification
    Route::get('/user/account/Certification', [UserCertificationController::class, 'CertificationUserFormPage'])->name('CertificationUserFormPage');
    Route::get('/user/account/Certification/record', [UserCertificationController::class, 'TableCertificationUsersPages'])->name('TableCertificationUsersPages');
    Route::get('/user/account/Certification/{id}/edit', [UserCertificationController::class, 'CertificationShowFormEdit'])->name('CertificationShowFormEdit');
    Route::put('/user/account/Certification/{id}/Update', [UserCertificationController::class, 'CertificationUserFormUpdate'])->name('CertificationUserFormUpdate');
    Route::get('/user/account/Certification/{id}/pdf', [UserCertificationController::class, 'CertificationUserExportPDF'])->name('CertificationUserExportPDF');
    Route::post('/user/account/Certification/{form}/reply', [UserCertificationController::class, 'CertificationUserReply'])->name('CertificationUserReply');

    //users License
    Route::get('/user/account/License', [UserLicenseController::class, 'LicenseUserFormPage'])->name('LicenseUserFormPage');
    Route::get('/user/account/License/record', [UserLicenseController::class, 'TableLicenseUsersPages'])->name('TableLicenseUsersPages');
    Route::get('/user/account/License/{id}/edit', [UserLicenseController::class, 'LicenseShowFormEdit'])->name('LicenseShowFormEdit');
    Route::get('/user/account/License/{id}/pdf', [UserLicenseController::class, 'LicenseUserExportPDF'])->name('LicenseUserExportPDF');
    Route::post('/user/account/License/{form}/reply', [UserLicenseController::class, 'LicenseUserReply'])->name('LicenseUserReply');
    Route::put('/user/account/License/{id}/Update', [UserLicenseController::class, 'TradeRegistryUserFormUpdate'])->name('TradeRegistryUserFormUpdate');

});
