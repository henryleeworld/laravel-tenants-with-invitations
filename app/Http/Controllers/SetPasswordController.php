<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePasswordRequest;
use Illuminate\Http\Request;

class SetPasswordController extends Controller
{
    public function create()
    {
        return view('auth.setpassword');
    }

    public function store(StorePasswordRequest $request)
    {
        auth()->user()->update([
            'password' => $request->password
        ]);

        return redirect()->route('home')
            ->with('status', __('Password set successfully'));
    }
}
