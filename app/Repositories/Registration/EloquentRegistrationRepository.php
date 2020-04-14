<?php

namespace App\Repositories\Registration;

use App\Repositories\Registration\RegistrationContract;
use Sentinel;

class EloquentRegistrationRepository implements RegistrationContract {

    public function create($request) {

  		$name_slug = preg_replace('/\s+/', '-', $request->name);

  		$credentials = [
  		  'full_name' => $request->name,
  		  'phone' => $request->phone,
  		  'email'    => $request->email,
  		  'network_name'    => $request->network_name,
  		  'password' => $request->password,
  		  'slug' => strtolower($name_slug),
  		];

        // dd($credentials);
  		// $userRole = $request->user_role;

  		$user = Sentinel::registerAndActivate($credentials);
  		$role = Sentinel::findRoleBySlug('user');
        $role->users()->attach($user);

  		return $user;
    }

    // return all Users
    public function findAll() {
		$users = User::all();
		return $users;
    }

    // return a User by ID
    public function findById($id) {
		return User::where('id', $id)->first();
    }

    // return a User by slug
    public function findBySlug($slug){
		return User::where('slug', $slug)->first();
    }

    // Update a User
    public function update($request, $slug) {
        // Find a user by slug and update user records
        $user = $this->findBySlug($slug);
        $user->full_name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
	    $user->save();
	    return $user;
    }

    // Remove a User
    public function remove($id) {
	    $user = $this->findById($id);
	    return $user->delete();
    }
}
