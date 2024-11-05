<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminDashboardController extends Controller
{

    public function index()
    {
        $user = Auth::guard('operator')->user();
        return view('operator::dashboard',
        
        compact(
            'user',
        ));
    }
}
