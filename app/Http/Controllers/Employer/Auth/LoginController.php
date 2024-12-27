<?php

namespace App\Http\Controllers\Employer\Auth;

use App\Models\PostJob;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\AdminLoginRequest;

class LoginController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('employer.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(AdminLoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('employer.dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('employer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Post Jobs
     */
    public function postJob(Request $request){

        $incomingFields = $request->validate([
            'title' => 'required',
            'deadline' => 'required',
            'level' => 'required',
            'vacancy_no' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'education_level' => 'required',
            'experience' => 'required',
            'skills' => 'required',
            'description' => 'required',
        ]);

        $incomingFields['employer_id'] = Auth::guard('employer')->id();

        PostJob::create($incomingFields);
        return redirect()->back()->with('message', 'Job Posted Successfully');
    }
}
