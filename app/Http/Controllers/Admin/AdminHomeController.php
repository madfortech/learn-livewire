<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

class AdminHomeController
{
     
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
}
