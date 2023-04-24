<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class SessionsController extends Controller
{
    public function index(): View {
        return view('login');
    }

    public function login(LoginRequest $request): RedirectResponse {
        $attributes = $request->validated();

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