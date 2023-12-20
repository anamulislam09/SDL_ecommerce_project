<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
// admin login 
    public function adminLogin(){
        return view('auth.admin-login');
       }

       // login
    public function login(Request $request){
        $request->validate([
           'email' => 'required|email',
           'password' => 'required',
       ]);

       if(auth()->attempt(array('email' => $request->email, 'password' => $request->password))){
           if(auth()->user()->is_admin==1){
               return redirect()->route('admin.home');
           }else{
               return redirect()->route('frontend.index');
           }
       }else{
           return redirect()->back()->with('error','Invalid email or password');
       }
   }

}
