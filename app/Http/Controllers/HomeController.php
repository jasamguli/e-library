<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function settings()
    {
        return view('master.settings.policy.index');
    }
}
