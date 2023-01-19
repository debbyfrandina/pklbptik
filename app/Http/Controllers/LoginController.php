<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {
    // If the user is already logged in, go to dashboard
    if (Auth::check()) {
      return redirect('/');
    }
    return view('login', [
      'title' => 'Login'
    ]);
  }

  // Authenticate user
  public function authenticate(Request $request)
  {
    $credentials = $request->validate([
      'email' => ['required', 'string'],
      'password' => ['required', 'string'],
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      return redirect('/');
    }

    return back()->withErrors([
      'identifier' => 'The provided credentials do not match our records.',
    ])->onlyInput('identifier');
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}