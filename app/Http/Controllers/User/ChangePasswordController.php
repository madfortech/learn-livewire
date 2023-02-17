<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class ChangePasswordController
{
     
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function edit()
    {
        return view('auth.passwords.edit');
    }
}
