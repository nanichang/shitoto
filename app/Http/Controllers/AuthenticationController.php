<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Authentication\AuthenticationContract;
use Carbon\Carbon;
use Sentinel;

class AuthenticationController extends Controller
{
    protected $repo;
    
    public function __construct(AuthenticationContract $authenticationContract) {
        $this->repo = $authenticationContract;
    }
    
    Public function getLogin() {
        return view('authentication.login');
    }

    public function login(Request $request) {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string'
        ]);

        $credentials = [
            'login'    => $request->login,
            'password' => $request->password,
        ];

        // dd($credentials);

        try {
            if(Sentinel::authenticate($credentials)) {
                $authUser = Sentinel::getUser();
                // dd($authUser);

                try {
                if (Sentinel::getUser()->roles()->first()->slug === 'super') {
                    // return redirect()->route('admin.index');
                    return 'superadmin';
                } elseif (Sentinel::getUser()->roles()->first()->slug === 'admin') {
                    // return redirect()->route('dash.admin.index');
                    return 'admin';
                } elseif (Sentinel::getUser()->roles()->first()->slug === 'user') {
                    return redirect()->route('dash.user.index');
                }
                } catch (\BadMethodCallException $e) {
                return redirect()->route('auth.login.get')->with('error', 'Your Session has expired. Please login again!');
                }
            } else {
                return redirect()->back()->withInput()->with('error', 'Ops... Your Login Credentials did not match');
            }
        } catch(ThrottlingException $e) {
            $delay = $e->getDelay();
            return redirect()->back()->with(['error' => "Ops.. You have been banned for $delay seconds."]);
        } catch(NotActivatedException $e){
            return redirect()->back()->with(['error' => 'Ops... Your account is not yet activated, please check your email for activation code or link']);
        }
    }


    public function logout() {
		Sentinel::logout(null, true);
		return redirect()->route('auth.login.get');
    }
}
