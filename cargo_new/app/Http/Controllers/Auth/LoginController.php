<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//vijayv2205
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Agent;
use App\Customer;
use Hash;
use Session;
use Redirect;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }



    /**
     * Override the existing function to customize it
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $data = Input::all();
        if($data['user_type'] == 'user'){
            $this->validateLogin($request);
            if ($this->hasTooManyLoginAttempts($request)) {
                $this->fireLockoutEvent($request);
                return $this->sendLockoutResponse($request);
            }
            if ($this->attemptLogin($request)) {
                return $this->sendLoginResponse($request);
            }
            $this->incrementLoginAttempts($request);
            return $this->sendFailedLoginResponse($request);
        }else{
            if($this->customLogin($data['user_type']) != false){
                Session::put('user_login', 1 );
                Session::put('user_type', $data['user_type'] );
                Session::put('user_data',  $this->customLogin($data['user_type']) );

                //redirect to user according to user type
                if( $data['user_type'] == 'customer' ){
                    return Redirect::route('customer.dashboard');
                }else if( $data['user_type'] == 'agent' ){
                    return Redirect::route('agent.dashboard'); 
                }
            }else{
                return $this->sendFailedLoginResponse($request);
            }
        }
        #end of the else    
    }
    #end of the function

    function customLogin($type){
        $email    = Input::get('email');
        $password =  Input::get('password') ;

        if($type == 'customer'){
            $obj = Customer::where('email', '=', $email)->first();
        }else if($type == 'agent'){
            $obj = Agent::where('email', '=', $email)->first();
        }

        if(count($obj) > 0){
            if(Hash::check($password, $obj->password)){
                return $obj ;
            }else{
                return false ;
            }
        }//end of the outer if
        else{
            return false ;
        }
    }
    #end of the function

}
