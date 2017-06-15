<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('orders')->insert([
        [
            'name' => 'Pancakes',
        	'recipe_id' => 1,        ],
        [
        	'name' => 'Donuts',
        	'recipe_id' => 2,
        ],
        [
           'name' => 'Cakey',
           'recipe_id' => 1,
        ]
        ]);
    }
}
