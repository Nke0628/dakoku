<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

#[OpenApi\PathItem]
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

    protected function authenticated(Request $request, $user)
    {
        return $user;
    }

    /**
     * Create new user.
     *
     * Creates new user or returns already existing user by email.
     */
    #[OpenApi\Operation]
    public function login()
    {
        return response()->json([
            'status'=>'success',
            'result'=>[
                'login'=>true,
                'user'=>[
                    'id'=>1,
                    'name'=>'nk0628',
                    'mailAddress'=>'test@gmail.com'
                ]
            ]
        ]);
    }

    /**
     * Create new user.
     *
     * Creates new user or returns already existing user by email.
     */
    #[OpenApi\Operation]
    public function authCheck()
    {
        return response()->json([
            'status'=>'success',
            'result'=>[
                'login'=>true
            ]
            ]);
    }
}
