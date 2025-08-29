<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('index');
});

Route::get('/jobs', function () {
    $job = Job::with('employer')->paginate(3);

    return view('jobs', ['jobs' => $job]);
});

Route::get('/jobs/{id}', function($id) {
    return view('job', ['job' => Job::find($id)]);
});

Route::get('/contact', function() {
    return view('contact');
});