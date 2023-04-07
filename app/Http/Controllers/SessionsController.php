<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function index(): View {
        return view('login');
    }

    public function login(): RedirectResponse {

        $attributes = request()->validate([
          'email' => 'required|email',
          'password' => 'required',
        ]);

        if (auth()->attempt($attributes)) {

          return redirect('/admin/dashboard')->with('success', 'Welcome');

        } else {
          return back()
          ->withInput()
          ->withErrors(['email' => 'Your provided credentials could not be verified']);
        }
    }

    public function destroy() {

      auth()->logout();

      return redirect('/')->with('success', 'Goodbye!');

    }

}