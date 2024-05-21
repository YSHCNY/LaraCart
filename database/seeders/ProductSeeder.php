<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name' => 'Apple Macbook Pro 16',
                'details' => 'Apple M1 Pro, 16 GPU, 16 GB, 512 GB SSD',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, voluptate nemo? Aliquam iusto quo nemo expedita voluptate quaerat odit ipsum?', 
                'brand' => 'Apple',
                'price' => 2499,
                'shipping_cost' => 25,
                'image_path' => ''
            ],

            [
                'name' => '',
                'details' => '',
                'description' => '',
                'brand' => '',
                'price' => '',
                'shipping_cost' => '',
                'image_path' => ''
            ]
        ];
    }
}
