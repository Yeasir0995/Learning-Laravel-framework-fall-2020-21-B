<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Job;

class employeeController extends Controller
{
    public function Index()
    {
        
        return view('employee.emphome');
    }

    public function AddJob()
    {
        return view('employee.job');
    }

    public function StoreJob(Request $req)
    {
        $job = new Job();
        
        $job->job_title     = $req->job_title;
        $job->salary        = $req->salary;
       
        $job->company       = $req->company;
        $job->job_location  = $req->job_location;

        if ($job->save()) {
            return redirect()->route('emp.addjob');
        }else{
            return back();
        }
        
    }

    public function JobList(){
        $jobs  = Job::all();
        return view('employee.joblist')->with('jobs', $jobs);
    }

   
    
}
