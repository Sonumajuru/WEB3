<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('recipes')->delete();
       
       $recipes =[
        
        [
            'id'  => 1,
            'ingredient_1' => 'Sugar',
            "ingredient_2" => 'Flour',
            "ingredient_3" => 'Baking Sodas',
            "body" => 'Buy some Coco for the ingredients'
        ],
        [
            'id'  => 2,
            'ingredient_1' => 'Chocolate',
            "ingredient_2" => 'Eggs',
            "ingredient_3" => 'Oil',
            "body" => 'This is a special recipes'
        ],
            [
            'id'  => 3,
            'ingredient_1' => 'Banana',
            "ingredient_2" => 'Water',
            "ingredient_3" => 'Syrup',
            "body" => 'Needed for making food'
        ],
            [
            'id'  => 4,
            'ingredient_1' => 'Butter',
            "ingredient_2" => 'Garlic',
            "ingredient_3" => 'Black Sugar',
            "body" => 'Peanuts are required for Cakes'
        ],
            [
            'id'  => 5,
            'ingredient_1' => 'Strawberry',
            "ingredient_2" => 'Sardines',
            "ingredient_3" => 'Orange',
            "body" => 'Smells good and gives flavour'
        ]
    ];
       DB::table('recipes')->insert($recipes);
    }
}                