<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\candidates;
use App\Http\Controllers\companies;
use App\Http\Controllers\admins;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('Login',function(){
    return view('login');
});
Route::get('candidateLogin',function(){
    return view('Candidatelogin');
});
Route::get('companylogin',function(){
    return view('Companylogin');
});
Route::get('Registeration',function(){
    return view('signup');
});Route::get('Candidate-Registeration',function(){
    return view('candidateregister');
});
Route::get('Company-Registeration',function(){
    return view('companyregister');
});

//Candidate Routing
Route::get('candashboard',function(){
    return view('user/index');
});

Route::get('csign',[candidates::class,'insert']);
Route::get('canlogin',[candidates::class,'canlogin']);
Route::get('edit',function(){
    return view('user/edit-profile');
});
Route::get('index',function(){
    return view('user/index');
});
Route::get('jobs',function(){
    return view('user/jobs');
});
Route::get('mail',function(){
    return view('user/mailbox');
});
Route::get('settings',function(){
    return view('user/settings');
});
Route::get('out',function(){
    return view('welcome');
});

//Company Routing
Route::get('comsign',[companies::class,'insert']);
Route::get('comlogins',[companies::class,'comlogin']);
Route::get('comdashboard',function(){
    return view('company/index');
});
Route::get('edit',function(){
    return view('company/edit-company');
});
Route::get('create',function(){
    return view('company/create-job-post');
});
Route::get('myjob',function(){
    return view('company/my-job-post');
});
Route::get('jobapp',function(){
    return view('company/job-applications');
});
Route::get('mailbox',function(){
    return view('company/mailbox');
});
Route::get('settings',function(){
    return view('company/settings');
});
Route::get('resume',function(){
    return view('company/resume-database');
});
Route::get('out',function(){
    return view('logout');
});
//Admin Main Routing
Route::get('Admin',function(){
    return view('admin/index');
});
Route::get('dashboard',function(){
    return view('admin/dashboard');
});

Route::get('adlogins',[admins::class,'adlogin']);
Route::get('activej',function()
{
    return view('admin/active-jobs');
});
Route::get('activej',function()
{
    return view('admin/active-jobs');
});
Route::get('app',function()
{
    return view('admin/applications');
});
Route::get('com',function()
{
    return view('admin/companies');
});
Route::get('out',function()
{
    return view('welcome');
});

//Mailing Server
Route::get('contact-us',function(){
    return view('contact');
});
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');