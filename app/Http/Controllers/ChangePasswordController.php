<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdatePasswordRequest;

class ChangePasswordController extends Controller
{

    public function edit()
    {
        return view('auth.passwords.edit');
    }

     
    public function update(UpdatePasswordRequest $request)
    {
        auth()->user()->update($request->validated());
         
        return redirect()
        ->route('password.edit')
        ->with('message', __('Update Password Successfully'));
    }
   
}

