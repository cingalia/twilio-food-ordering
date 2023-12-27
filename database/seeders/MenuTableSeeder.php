<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            [
                'name' => "Nigerian Jollof Rice and Chicken",
                'price' => "100",
            ],
            [
                'name' => "Burger and Coke",
                'price' => "50",
            ],
            [
                'name' => "Chicken and Chips",
                'price' => "30",
            ],
            [
                'name' => "Ghana Jollof Rice and Water",
                'price' => "5",
            ],
        ]);
    }
}
