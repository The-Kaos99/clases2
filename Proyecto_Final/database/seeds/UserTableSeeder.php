<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_profesor= Role::where('name','profesor')->first();
        $role_admin= Role::where('name','admin')->first();
        $role_padre= Role::where('name','padre')->first();

        $user = new User();
        $user->name='profe';
        $user->email='profe@gmail.com';
        $user->password=bcrypt('query');
        $user->save();
        $user->roles()->attach($role_profesor);
        $user = new User();
        $user->name='Admin';
        $user->email='mariansomesa@gmail.com';
        $user->password=bcrypt('Qwerty99');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
