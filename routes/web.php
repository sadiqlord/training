<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/job', function () {
    return view('job',['jobs'=>Job::with('employer')->paginate(3)]);
});

 Route::get('/job/{id}',function($id){
    return view('job-detail',["job"=>Job::find($id)]);
 });

Route::get('/contact', function () {
    return view('contact');
});
