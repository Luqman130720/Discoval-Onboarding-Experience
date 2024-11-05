<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function studentLoginForm()
    {
        return view('pages.login.student-login');
    }
    public function teacherLoginForm()
    {
        return view('pages.login.teacher-login');
    }
    public function operatorLoginForm()
    {
        return view('pages.login.operator-login');
    }
    public function portal()
    {
        return view('pages.login.portal');
    }
    public function dashboard()
    {
        return view('pages.login.dashboard');
    }
    public function contact()
    {
        return view('pages.login.contact');
    }

    public function loginStudent(Request $request)
    {
        $request->validate([
            'nisn' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('nisn', 'password');

        if (Auth::guard('student')->attempt($credentials, $request->filled('remember'))) {
            return redirect()->intended('/student');
        }

        return back()->withErrors(['nisn' => 'NISN atau password salah.']);
    }

    public function loginOperator(Request $request)
    {
        $credentials = $request->only('email', 'password');
        Log::info('Login attempt:', $credentials);

        if (Auth::guard('operator')->attempt($credentials, $request->filled('remember'))) {
            return redirect()->intended('/operator');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function loginTeacher(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Gunakan guard 'teacher' untuk autentikasi
        if (Auth::guard('teacher')->attempt($credentials, $request->filled('remember'))) {
            return redirect()->intended('/teacher/dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }



    public function logout(Request $request)
    {
        if (Auth::guard('student')->check()) {
            Auth::guard('student')->logout();
        } elseif (Auth::guard('teacher')->check()) {
            Auth::guard('teacher')->logout();
        } elseif (Auth::guard('operator')->check()) {
            Auth::guard('operator')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.portal')->with('status', 'You have been logged out successfully.');
    }

}
