
<?php

use Illuminate\Database\Seeder;

use App\DropdownsType;
use App\DropdownValue;

class DropDownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DropdownsType::truncate();
        DropdownValue::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

//        \DB::table('dropdowns_types')->delete();
//        \DB::table('dropdown_values')->delete();


        $arr = [

            'business_type' => [
                'Commercial', 'Domestic'
            ]
            ,
            'phone_type' => [
                'Landline', 'Mobile Phone',
            ]
            ,
            'site_type' => [
                'Government', 'Private', 'Commercial'
            ]

        ];


        foreach ($arr as $type => $values) {

            $type = DropdownsType::create([
                'name' => $type,
                'active' => 1,
            ]);

            foreach ($values as $value) {
                DropdownValue::create([
                    'name' => $value,
                    'type_id' => $type->id,
                    'active' => 1
                ]);
            }

        }

        foreach (DropdownValue::all() as $obj) {

            $obj->parent_id = $obj->id;
            $obj->save();
        }


    }
}
