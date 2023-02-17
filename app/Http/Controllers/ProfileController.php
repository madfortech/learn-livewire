<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{

    public function edit()
    {
        return view('user.profile.edit');
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();

        $user->update($request->validated());

        return redirect()->route('profile.edit')
        ->with('message', __('Update profile'));
    }

    public function destroy()
    {
        $user = auth()->user();

        $user->update([
            'email' => time() . '_' . $user->email,
        ]);

        $user->delete();

        return redirect()
        ->route('login')
        ->with('message', __('Account Delete Successfully'));
    }
}

