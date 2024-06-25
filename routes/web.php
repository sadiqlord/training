<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/jobs/create', function () {
    return view('jobs/job-create');
});

Route::post('/jobs',function(){
    request()->validate([
        'title'=>['required','min:3'],
        'salary'=>['required']
    ]);

    Job::create([
        'title'=>request('title'),
        'salary'=>request('salary'),
        'employer_id'=>1
    ]);
    return redirect('/jobs');
   
});

Route::get('/jobs', function () {
    return view('jobs/index',['jobs'=>Job::with('employer')->latest()->paginate(3)]);
});

 Route::get('/jobs/{job}',function(Job $job){
    return view('jobs/job-detail',["job"=>$job]);
 });

 Route::get('/jobs/{job}/edit',function(Job $job){
    return view('jobs/job-edit',["job"=>$job]);
 });

 Route::patch('/jobs/{job}',function(Job $job){
    request()->validate([
        'title'=>['required','min:3'],
        'salary'=>['required']
    ]);

    $job->update([
        'title'=>request('title'),
        'salary'=>request('salary'),
    ]);

    return redirect('/jobs/'.$job->id);
 });

 Route::delete('/jobs/{job}',function(Job $job){
    $job->delete();
    return redirect('/jobs');
 });

Route::get('/contact', function () {
    return view('contact');
});
