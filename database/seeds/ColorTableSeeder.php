<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \App\Color::create([
            'color' => 'Đỏ',
        ]);

        \App\Color::create([
            'color' => 'Xanh lam',
        ]);

        \App\Color::create([
            'color' => 'Xanh lục',
        ]);

        \App\Color::create([
            'color' => 'Vàng',
        ]);

        \App\Color::create([
            'color' => 'Đen',
        ]);
    }
}
