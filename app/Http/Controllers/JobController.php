<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function index() {
        $job = Job::with('employer')->latest()->simplePaginate(3);

        return view('Jobs.index', ['jobs' => $job]);
    }

    public function create() {
        return view('Jobs.create');
    }

    public function show(Job $job) {
        return view('Jobs.show', ['job' => $job]);
    }

    public function edit(Job $job) {
        return view('Jobs.edit', ['job' => $job]);
    }

    public function store() {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        Job::create([
            'title' => request()->input('title'),
            'salary' => request()->input('salary'),
            'employer_id' => 1,
        ]);

        return redirect('/jobs');
    }

    public function update(Job $job) {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        
        return redirect('/jobs/' . $job->id);
    } 

    public function destroy(Job $job) {
        $job->delete();
    
        return redirect('/jobs');
    }
}
