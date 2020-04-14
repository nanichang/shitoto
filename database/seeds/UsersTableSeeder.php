<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $driverCredentials = [
        'full_name' => 'Super',
        // 'last_name' => 'Admin',
        'phone' => '1234567890',
        'email' => 'super@ret.com',
        'username' => 'super',
        'password' => 'secret',
        'slug' => 'super-admin',
      ];
    
      $superAdmin = Sentinel::registerAndActivate($driverCredentials, true);
      $role = Sentinel::findRoleBySlug('super');
      $role->users()->attach($superAdmin);
  
      $adminCredentials = [
        'full_name' => 'Admin',
        // 'last_name' => 'Admin',
        'phone' => '1234567890',
        'email' => 'admin@ret.com',
        'username' => 'admin',
        'password' => 'secret',
        'slug' => 'admin'
      ];
  
      $admin = Sentinel::registerAndActivate($adminCredentials, true);
      $role = Sentinel::findRoleBySlug('admin');
      $role->users()->attach($admin);
  
      $userCredentials = [
        'full_name' => 'Nani',
        // 'last_name' => 'Shitoto',
        'phone' => '1234567890',
        'email' => 'user@ret.com',
        'username' => 'customer',
        'password' => 'secret',
        'slug' => 'nani-customer'
      ];
  
      $user = Sentinel::registerAndActivate($userCredentials, true);
      $role = Sentinel::findRoleBySlug('user');
      $role->users()->attach($user);
    }
}
