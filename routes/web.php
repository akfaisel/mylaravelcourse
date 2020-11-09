<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/pricing', function () {
    return view('pages.pricing');
});

Route::get('/demo', function () {
    $users = [
        ['name'=>'Ashok', 'std'=>'12th', 'age'=>18],
        ['name'=>'Kumar', 'std'=>'10th', 'age'=>16],
        ['name'=>'Prasanth', 'std'=>'10th', 'age'=>16],
        ['name'=>'Abdul', 'std'=>'10th', 'age'=>17],
    ];
    return view('pages.demo', [
        'name'=>'Suganya', 
        'age'=>50, 
        'category'=>'patient', 
        'blood'=>'AB+',
        'users'=>$users,
    ]);
});

