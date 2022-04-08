<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        session_start();

        if(isset($_SESSION['authentic'])) {
            return redirect()->route('app.index');
        } else {
            return view("web.login");
        }
    }

}
