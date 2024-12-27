<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Objective;
use Illuminate\View\View;
use App\Models\Appliedjob;
use App\Models\GeneralInfo;
use Illuminate\Http\Request;
use App\Models\EducationLevel;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function postGeneralInfo(Request $request){
        $incomingFields = $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'dob' => 'required'
        ]);

        $incomingFields['user_id'] = auth()->id();
        GeneralInfo::create($incomingFields);
        return redirect()->back()->with('message', 'General Information Succesfully');
    }

    public function postObjective(Request $request){

        $incomingFields = $request->validate([
            'objective' => 'required',
        ]);

        $incomingFields['user_id'] = auth()->id();
        Objective::create($incomingFields);
        return redirect()->back()->with('message', 'Objective Added Succesfully');
    }

    public function workExperiences(Request $request){

        $incomingFields = $request->validate([
            'designation' => 'required',
            'company' => 'required',
            'location' => 'required',
            'role' => 'required',
        ]);

        $incomingFields['user_id'] = auth()->id();
        WorkExperience::create($incomingFields);
        return redirect()->back()->with('message', 'Work Experience Added Succesfully');
    }


    public function educationLevel(Request $request){

        $incomingFields = $request->validate([

            'degree' => 'required',
            'course' => 'required',
            'university' => 'required',
            'institution' => 'required',
            'percent' => 'required',
            'gradYear' => 'required',
        ]);

        $incomingFields['user_id'] = auth()->id();
        EducationLevel::create($incomingFields);
        return redirect()->back()->with('message', 'Education Added Succesfully');
    }

    public function skills(Request $request){

        $incomingFields = $request->validate([
            'skills' => 'required',
        ]);

        $incomingFields['user_id'] = auth()->id();
        Skill::create($incomingFields);
        return redirect()->back()->with('message', 'Skills Added Successfully');
    }

    /**
     * Apply to jobs
     */
    public function applyJob(Request $request){
        $incomingFields = $request->validate([
            'title' => 'required',
            'deadline' => 'required',
            'job_id' => 'required'
        ]);

        $incomingFields['user_id'] = auth()->id();
        Appliedjob::create($incomingFields);
        return redirect()->back()->with('message', 'Applied Successfully');
    }

    /**
     * make cv here
     */
    public function user_cv(){
        
        $id = auth()->id();
        $user = DB::table('users')->where('id','=',$id)->get();
        $info = DB::table('general_infos')->where('user_id','=',$id)->get();           
        $obj = DB::table('objectives')->where('user_id','=',$id)->get();
        $work_exp = DB::table('work_experiences')->where('user_id','=',$id)->get();
        $education = DB::table('education_levels')->where('user_id','=',$id)->get();
        $skills = DB::table('skills')->where('user_id','=',$id)->get();

        $detail = [$user, $info, $obj, $work_exp, $education, $skills];

        return view('user_cv', [
            'detail' => $detail
        ]);
    }

    /**
     * get Applied Jobs
     */
    public function getAppliedJobs(){
        $jobs = DB::table('appliedjobs')->where('user_id','=', auth()->id())->get();
        return view('appliedJobs', ['jobs' => $jobs]);
    }

    /**
     * Applied Job Info
     */
    public function appliedJobInfo(Appliedjob $job){

        $postjob = DB::table('postjobs')->where('id','=', $job->job_id)->get();
        $emp = DB::table('employers')->where('id', '=', $postjob[0]->employer_id)->get('name');
        $eachjob = [$postjob, $emp];
    
        return view('appliedJobInfo', ['eachjob' => $eachjob]);
    }
}
