<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;  // Import the correct Mail facade
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TwoFactorController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $code = rand(100000, 999999);  
        $user->two_factor_code = $code;
        $user->save();

        Mail::raw("Your two-factor code is $code", function ($message) use ($user) {
            $message->to($user->email)->subject('Two-Factor Code');
        }); 

        return view('auth.two-factor');  
    }

    public function verify(Request $request)
    {
        // Validate the code input
        $request->validate([
            'code' => 'required|integer',
        ]);

        $user = Auth::user();

        // Check if the provided code matches the user's two-factor code
        if ($request->code == $user->two_factor_code) {
            session(['two_factor_authenticated' => true]);
            return redirect()->intended('/dashboard');  // Redirect to the intended dashboard
        }

        // Redirect back with an error message
        return redirect()->route('two-factor.index')->withErrors(['errors' => 'The provided code is incorrect']);
    }
}
