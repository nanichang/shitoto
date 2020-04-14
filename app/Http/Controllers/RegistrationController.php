<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Registration\RegistrationContract;
use App\Repositories\Role\RoleContract;
use Sentinel;

class RegistrationController extends Controller
{
    protected $repo;
    protected $roleRepo;

    public function __construct(RegistrationContract $registrationContract, RoleContract $roleContract) {
        $this->repo = $registrationContract;
        $this->roleRepo = $roleContract;
    }

    public function register() {
      return view('registration.index');
    }

    public function store(Request $request) {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            // 'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);

        

        $user = $this->repo->create($request);

        if($user->id) {
            return redirect()->route('auth.login.get')->with('success', "Registration successful. Activation email sent to $user->email, Please check your ");
        } else {
            return redirect()->back()->withInput()->with('error', 'Registration failed. Please try again.');
        }
    }
}
