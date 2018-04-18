<?php

use Illuminate\Database\Seeder;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \App\Material::create([
                'name' => 'Nhựa',
        ]);

        \App\Material::create([
                'name' => 'vải',
        ]);

        \App\Material::create([
                'name' => 'Sắt',
        ]);

        \App\Material::create([
                'name' => 'Đồng',
        ]);
    }
}
