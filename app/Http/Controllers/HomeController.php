<?php

namespace App\Http\Controllers;

use App\Models\Postjob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    /**
     * get dashboard
     */
    public function view_home(){

        $jobs = DB::table('postjobs')->get();
        return view('home', [
            'jobs' => $jobs
        ]);
    }

    /**
     * get register page
     */
    public function registerPage(){
        return view('registerPage');
    }

   /**
    * view-job function
    */
    public function viewJob(Postjob $job){
        
        $emp = DB::table('employers')->where('id','=', $job->employer_id)->get();
        $jb = DB::table('postjobs')->where('id','=', $job->id)->get();
        $job_detail = [$emp, $jb];
        return view('view-job',['job_detail' => $job_detail]);
    }
}
