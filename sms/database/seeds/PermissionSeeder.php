<?php

use Illuminate\Database\Seeder;

use App\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected function insertAndReturnId($string, $parent_id = 0)
    {
        $a = explode('|', $string);

        $ins = [
            'name' => trim($a[0]),
            'label' => trim($a[1]),
            'parent_id' => $parent_id
        ];

        $permission = Permission::create($ins);

        return $permission->id;
    }

    public function run()
    {


        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Permission::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

//manage.users
//manage.roles

//manage.permissions
//user.edit
//manage.generator
//manage.companies

//manage.sites
//manage.services
//manage.peoples

//manage.
//manage.dropdownsvalues
//manage.audit

        $arr = [
            'access.users|Can Access Users' =>
                [
                    'access.user.create|Can Create User',
                    'access.user.edit|Can Edit User',
                    'access.user.delete| Can Delete User'
                ],


            'access.roles|Can Access Roles' =>
                [
                    'access.role.create|Can Create Role',
                    'access.role.edit|Can Edit Role',
                    'access.role.delete| Can Delete Role'
                ],

            'access.permissions|Can Access Permission' =>
                [
                    'access.permission.create|Can Create Permission',
                    'access.permission.edit|Can Edit Permission',
                    'access.permission.delete| Can Delete Permission'
                ],    


        ];


//        \DB::table('permissions')->delete();


        foreach ($arr as $k => $v) {


            $id = $this->insertAndReturnId($k);


            foreach ($v as $string) {
                $this->insertAndReturnId($string, $id);

            }


        }


    }
}
