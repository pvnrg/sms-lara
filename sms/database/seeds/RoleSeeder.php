<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

////        Role::delete();
//        SU	GesManSys Super User	View  Edit  Delete
//2	OP	GesManSys Operator	View  Edit  Delete
//3	CA	Company Admin	View  Edit  Delete
//4	CO	Company Operator	View  Edit  Delete
//5	SA	Site Admin	View  Edit  Delete
//6	SO	Site Operator	View  Edit  Delete
//7	DA	Service Admin	View  Edit  Delete
//8	DO	Service Operator


//        \DB::table('roles')->delete();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Role::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        $role = Role::create(//1
            [
                'name' => 'SU',
                'label' => 'Super Admin'
            ]);


        $role->permissions()->sync(\App\Permission::pluck('id'));


        


    }
}
