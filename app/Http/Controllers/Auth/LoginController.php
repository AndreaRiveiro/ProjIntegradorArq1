<?php

namespace App\Http\Controllers\Auth;
use Auth;/* logout*/
use Illuminate\Http\Request; /* logout*/
use App\Cliente; 
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

   /* ====================================================================
            Teste NATH - Início
      ====================================================================*/
    protected $redirectTo = '/sucessoTeste';

    /* ====================================================================
            Teste NATH - Fim
       ====================================================================*/

    /* ====================================================================
            Teste Logout - Início
       ====================================================================*/

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/principal');
      }

    /* ====================================================================
            Teste Logout - Fim
    ====================================================================*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function teste(){
        
        return view('teste');
    }
}
