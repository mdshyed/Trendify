<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginHistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $logins = $user->logins()
            ->orderBy('login_at', 'desc')
            ->paginate(10);

        return view('user-login-history', compact('logins'));
    }
}
