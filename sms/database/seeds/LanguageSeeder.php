<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Language::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $fileData = file_get_contents(public_path('imps/languages.json'));

        $data = json_decode($fileData);


        foreach ($data as $row) {

            $row = (array)$row;
            $row['active'] = false;
            $row['description'] = '';
            Language::create($row);
        }
    }
}
