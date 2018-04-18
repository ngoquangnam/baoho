<?php

use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \App\Size::create([
                'size' => 'Lớn',
        ]);

        \App\Size::create([
                'size' => 'Vừa',
        ]);

        \App\Size::create([
                'size' => 'Nhỏ',
        ]);
    }
}
