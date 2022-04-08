<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class AuthenticController extends Controller
{
    public function login(Request $request, Users $users)
    {
        $result = $users::where('password', $request->input("password"))->first();

        if(isset($result->email)) {
            session_start();

            $_SESSION['authentic'] = true;

            return redirect()->route('app.index');
        } else {
            return redirect()->route('web.login');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();

        return redirect()->route('web.login');
    }
}
