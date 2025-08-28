<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
            'user_type' => 'required|in:candidate,employer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->except('password'));
        }

        // Attempt to log the user in
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'type' => $request->user_type
        ], $request->remember)) {
            
            $request->session()->regenerate();
            
            // Redirect based on user type
            return match(Auth::user()->type) {
                'candidate' => redirect()->intended(route('candidate.dashboard')),
                'employer' => redirect()->intended(route('employer.dashboard')),
                'admin' => redirect()->intended(route('admin.dashboard')),
                default => redirect('/')
            };
        }

        // If authentication failed
        return redirect()->back()
            ->withInput($request->except('password'))
            ->with('error', 'These credentials do not match our records.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}