<?php

namespace App\Services;

use App\Models\UserLogin;
use Illuminate\Http\Request;

class UserLoginService
{
    public function trackLogin($user, Request $request)
    {
        UserLogin::create([
            'user_id' => $user->id,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'login_at' => now()
        ]);
    }
} 