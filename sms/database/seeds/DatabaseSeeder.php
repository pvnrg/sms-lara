<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       // $this->call('WebsiteSeeder');
        $this->call('PermissionSeeder');

        $this->call('RoleSeeder');

        $this->call('UsersTableSeeder');
     //   $this->call('CountrySeeder');
        // $this->call('DropDownSeeder');
       // $this->call('LanguageSeeder');
      //  $this->call('AllSeeder');

    }

}
