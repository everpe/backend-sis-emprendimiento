<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->dni = "1058847757";
        $admin->name = "Admin";
        $admin->lastname = 'admin';
        $admin->email = 'admin@mail.com';
        $admin->password = 'admin'; 
        $admin->save();

        // return User::create([
        //     'name' => 'Admin',
        //     'lastname' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => 'password',
        //     'role_id' => Role::where('name','admin')->first()->id
        // ]);
    }
}
