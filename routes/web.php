<?php

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
Route::get('/', 'TemplateController@index'); 


Route::get('/home', function () {
    return view('frontend.home');
})->name('home');  


Route::get('/layout', function () {
    return view('frontend.layout');
})->name('layout'); 


Route::get('/partner' , function() {
    return view('frontend.partner');
})->name('partner');  

Route::get('/event' , function() {
    return view('frontend.event');
})->name('event');

Route::get('/event1' , function() {
    return view('frontend.event1');
})->name('event1');

Route::get('/event2' , function() {
    return view('frontend.event2');
})->name('event2');

Route::get('/jobs' , function() {
    return view('frontend.jobs');
})->name('jobs');

Route::get('/job' , function() {
    return view('frontend.job');
})->name('job');

Route::get('/jobform' , function() {
    return view('frontend.jobform');
})->name('jobform');

Route::get('/internships' , function() {
    return view('frontend.internships');
})->name('internships');

Route::get('/intern1' , function() {
    return view('frontend.intern1');
})->name('intern1');

Route::get('/internform' , function() {
    return view('frontend.internform');
})->name('internform');

Route::get('/gallery' , function() {
    return view('frontend.gallery');
})->name('gallery');

Route::get('/contact' , function() {
    return view('frontend.contact');
})->name('contact');

Route::get('/blog' , function() {
    return view('frontend.blog');
})->name('blog');

Route::get('/tech' , function() {
    return view('frontend.tech');
})->name('tech');

Route::get('/team' , function() {
    return view('frontend.team');
})->name('team');

Route::get('/dashboard' , function() {
    return view('admin.dashboard');
});

Route::group(['middleware'=>['auth', 'admin']], function(){
    Route::get('/dashboard',function(){
        return view('admin.dashboard');
    });
});







