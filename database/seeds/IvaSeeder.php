<?php

use Illuminate\Database\Seeder;

class IvaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Iva::create([
            'name' => '0'
        ]);
        App\Iva::create([
            'name' => '8'
        ]);
        App\Iva::create([
            'name' => '12'
        ]);
        App\Iva::create([
            'name' => '16'
        ]);
    }
}
