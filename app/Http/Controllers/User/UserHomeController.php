<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class UserHomeController
{
     
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }
}
