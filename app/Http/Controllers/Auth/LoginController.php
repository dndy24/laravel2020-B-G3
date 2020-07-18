<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Auth;
use Str;
use App\User;
use Exception;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function github()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubRedirect()
    {
        try{
            $user = Socialite::driver('github')->stateless()->user();
            $finduser = User::where('email', $user->email)->first();

            if($finduser){
                Auth::login($finduser);
                return redirect('/home');
            }
            else{
                $user = User::firstOrCreate([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => Hash::make('dummy')
                ]);

                $user->markEmailAsVerified();
            }

            Auth::login($user, true);
            return redirect('/home');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    // public function facebook()
    // {
    //     return Socialite::driver('facebook')->redirect();
    // }

    // public function facebookRedirect()
    // {
    //     $user = Socialite::driver('facebook')->stateless()->user();

    //     $user = User::firstOrCreate([
    //         'name' => $user->name
    //     ], [
    //         'email' => $user->email,
    //         'password' => Hash::make('dummy'),
    //         'email_verified_at' => now()
    //     ]);

    //     Auth::login($user, true);

    //     return redirect('/home');
    // }

    public function twitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function twitterRedirect()
    {
        try {
            $user = Socialite::driver('twitter')->user();
            $finduser = User::where('email', $user->email)->first();
            
            if($finduser){
                Auth::login($finduser);
                return redirect('/home');
            } 
            else{
                $user = User::firstOrCreate([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => Hash::make('dummy')
                ]);

                $user->markEmailAsVerified();
            }

            Auth::login($user, true);
            return redirect('/home');

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function showLoginForm(){
        return view('auth.login');
    }
    
}
