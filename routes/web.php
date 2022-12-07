<?php

use Illuminate\Support\Facades\Route;


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