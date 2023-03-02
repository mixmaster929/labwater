<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


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
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $currenturl = url()->full();
        $str = explode("//", $currenturl);
        $strstr = explode(".", $str[1]);
        $subdomain = $strstr[0];

        // $credentials = $request->only('email', 'password');
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->first();
        if (isset($user)) {
            
            $role = $user->roles[0]->title;
            if($role === 'CompanyAdmin'){
                $company = Company::where('user_id', $user->id)->first();
            }
            if($role === 'Users'){
                $company = $user->companies[0];
            }
            if($role === 'SuperAdmin'){
                if (Auth::attempt(['email' => $email, 'password' => $password, 'suspend' => 0])) {
                    // Authentication passed...
                    return redirect()->intended('home');
                }
            }
            
            if (isset($company)) {
                $is_company = strcmp(strtolower($subdomain), strtolower($company->name)) !== 0 ? false : true;
                if ($is_company) {
                    if (Auth::attempt(['email' => $email, 'password' => $password, 'suspend' => 0])) {
                        // Authentication passed...
                        return redirect()->intended('home');
                    }
                }
            }
        }

        return $this->sendFailedLoginResponse($request);

    }
}
