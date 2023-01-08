<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\candidates;
use App\Http\Controllers\companies;
use App\Http\Controllers\admins;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DownloadFileController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('Login',function(){
//     return view('login');
// });
// Route::get('candidateLogin',function(){
//     return view('Candidatelogin');
// });
// Route::get('companylogin',function(){
//     return view('Companylogin');
// });
// Route::get('Registeration',function(){
//     return view('signup');
// });Route::get('Candidate-Registeration',function(){
//     return view('candidateregister');
// });
// Route::get('Company-Registeration',function(){
//     return view('companyregister');
// });
//Candidate Routing
// Route::get('candashboard',function(){
//     return view('user/index');
// });
Route::get('index',[candidates::class , 'jobview']);
Route::get('show-jobs',[candidates::class , 'jobview']);
Route::get('csign',[candidates::class,'insert']);
Route::get('canlogin',[candidates::class,'canlogin']);
Route::get('jobscan/{j_id}/{c_id}',[candidates::class,'jobapply'])->name('apply.job');
// Route::get('jobsearch',[[candidates::class,'jobsearch']]);
// Route::get('editcan',function(){
//     return view('user/edit-profile');
// });

Route::get('editcan',[candidates::class , 'profileview']);
// Route::get('settingscan',[candidates::class , 'update_pass']);

Route::get('jobscan',function(){
    return view('user/job-posted');
});
Route::get('jobscan',[candidates::class,'view']);
// Route::get('jobscan',[companies::class , 'job_view']);
Route::get('mailcan',function(){
    return view('user/mailbox');
});
Route::get('settingscan',function(){
    return view('user/settings');
});
Route::get('out',function(){
    return view('welcome');
});

//Company Routing
Route::get('/manager/comsign',[companies::class,'insert']);
Route::get('comlogins',[companies::class,'comlogin']);
Route::get('/manager/comdashboard',function(){
    return view('company/index');
});
// Route::get('/manager/editcom',function(){
//     return view('company/edit-company');
// });
Route::get('/manager/editcom',[companies::class , 'profileview']);

Route::get('/manager/create',function(){
    return view('company/create-job-post');
});
Route::get('/manager/myjob',[companies::class , 'view_job']);
Route::get('/manager/postjob',[companies::class,'insertjobs']);
// Route::get('/manager/myjob',function(){
//     return view('company/my-job-post');
// });
// Route::get('/manager/jobapp',function(){
//     return view('company/job-applications');
// });
Route::get('/manager/jobapp',[companies::class , 'appview']);
Route::get('/manager/mailbox',function(){
    return view('company/mailbox');
});
Route::get('/manager/settings',function(){
    return view('company/settings');
});
Route::get('/manager/resume',function(){
    return view('company/resume-database');
});
// Route::get('/manager/logout',function(){
//     return view('logout');
// });
// Admin Main Routing
Route::get('Admin',function(){
    return view('admin/index');
});
Route::get('super-admin/dashboard',function(){
    return view('admin/dashboard');
});

Route::get('adlogins',[admins::class,'adlogin']);
// Route::get('super-admin/activej',function()
// {
//     return view('admin/active-jobs');
// });
Route::get('super-admin/activej',[admins::class , 'show_jobs']);
Route::get('super-admin/app',[admins::class , 'candidates']);
Route::get('super-admin/com',[admins::class , 'show_company']);
// Route::get('activej',function()
// {
//     return view('admin/active-jobs');
// });
// Route::get('super-admin/app',function()
// {
//     return view('admin/applications');
// });
// Route::get('super-admin/com',function()
// {
//     return view('admin/companies');
// });
// Route::get('out',function()
// {
//     return view('welcome');
// });

//Mailing Server
Route::get('contact-us',function(){
    return view('contact');
});
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

//For File Upload
Route::get('cv-upload', [FileController::class, 'index']);
Route::post('cv-upload', [FileController::class, 'store'])->name('file.store');
Route::post('cv-upload', [FileController::class, 'store'])->name('file.store');
//For File Download
// Route::get('cv-download', [FileController::class, 'download'])->name('file.download');
Route::get('cv-download/{u_id}', [FileController::class, 'download'])->name('file.download');
//Yajra
// Route::get('yajra', [UserController::class, 'index'])->name('users.index');
Route::get('yajra', [UserController::class,'index'])->name('users.index');

Auth::routes();

Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
});
  
/*------------------------------------------
--------------------------------------------
All Super Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {
  
    Route::get('/super-admin/home', [HomeController::class, 'superAdminHome'])->name('super.admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
    Route::get('/manager/profile', [HomeController::class, 'managerprofile'])->name('manager.profile');
});

//logout
Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    Route::post('editcan',[candidates::class,'update'])->name('profile.update');
    Route::post('settingscan',[candidates::class,'update_pass'])->name('pass.change');
    //for company
    Route::post('/manager/editcom',[companies::class,'update'])->name('com.update');
    Route::post('/manager/settings',[companies::class,'update_pass'])->name('com_pass.change');

    // Route::post('jobs',[companies::class,'job_view'])->name('com_pass.change');
 });
//  Route::group(['middleware' => ['auth']], function() {
//     /**
//     * Logout Route
//     */
//     Route::get('manager/logout', [LogoutController::class, 'perform'])->name('logout.perform');
//  });