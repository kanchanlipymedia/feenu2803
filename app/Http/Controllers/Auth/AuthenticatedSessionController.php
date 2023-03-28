<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $userType = $request->get('user_type');
        if($userType == 1){
            $request->validate([
                'email'=> ['required','email',Rule::exists('users')->where(function ($query) {return $query->where('user_type',1);})],
                'password' => 'required|string'
            ],
            [
                'email.exists'=> __('No User Found')
            ]
        );
        }elseif($userType == 2){
            $request->validate([
                    'email'=> ['required','email',Rule::exists('users')->where(function ($query) {return $query->where('user_type',2);})],
                    'password' => 'required|string'
                ],
                [
                    'email.exists'=> __('No User Found')
                ]
            );
        }
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();
        // dd($user);
        if(empty($user->status)){
            Auth::logout();
            return redirect('login')->with('alert-error', __('messages.user_account_inactive'));
        }
        if($user->user_type == 1){
            return redirect()->route('admin.dashboard');
        }
        else{
            // return redirect()->intended();
            return redirect()->route('frontend-index');
        }

        // return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
