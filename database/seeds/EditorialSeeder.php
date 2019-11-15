<?php

use Illuminate\Database\Seeder;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 72; $i++) { 
           
            App\Editions::create([
                'id_author' => $i,
                'name' => 'Filven',
                'year' => '2019-01-01'
            ]);
        }
    }
}
