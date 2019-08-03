<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \DB::table('users')->delete();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        $user = User::create(
            [
                'name' => 'Admin',
                'email' => 'admin.citrusbug@gmail.com',
                'password' => bcrypt(123456),
                'gender' => 'male'
            ]
        );


        if (!$user->hasRole('SU')) {
            $user->assignRole('SU');

        }
    }
}
