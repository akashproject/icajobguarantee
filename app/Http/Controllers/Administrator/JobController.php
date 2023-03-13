<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobType;

class JobController extends Controller
{
    public function index()
    {
        try {
            $jobs = Job::all();
            return view('administrator.jobs.index',compact('jobs'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function add() {
        $jobTypes = JobType::all();
        return view('administrator.jobs.add',compact('jobTypes'));
    }

    public function show($id)
    {
        try {
            $job = Job::find($id);
            $jobType = JobType::all();
            return view('administrator.jobs.show',compact('job','jobType'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            
            $validatedData = $request->validate([
                'name' => 'required',
            ]);
            if($data['job_id'] <= 0){
                $job = Job::create($data);
            } else {
                $job = Job::findOrFail($data['job_id']);
                $job->update($data);
            }
            return redirect()->back()->with('message', 'Job updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    
    public function delete($id) {
        $course = Job::findOrFail($id);
        $course->delete();
        return redirect('/administrator/courses');
    }

    public function indexJobType()
    {
        try {
            $jobTypes = JobType::all();
            return view('administrator.jobs.indexType',compact('jobTypes'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function showJobType($id)
    {
        try {
            $jobType = JobType::find($id);
            $listjobType = JobType::all();
            return view('administrator.jobs.showjobType',compact('jobType','listjobType'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function saveJobType(Request $request) {
        try {
            $data = $request->all();
            
            $validatedData = $request->validate([
                'name' => 'required',
                'slug' => 'required',
            ]);

            if($data['job_type_id'] <= 0){
                $jobType = JobType::create($data);
            } else {
                $jobType = JobType::findOrFail($data['job_type_id']);
                $jobType->update($data);
            }
            return redirect()->back()->with('message', 'Job type updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }


}
