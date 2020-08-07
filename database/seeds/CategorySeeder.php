<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            ['name'=>'Features', 'slug'=>'features', 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
            ['name'=>'Food', 'slug'=>'food', 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
            ['name'=>'Travel', 'slug'=>'travel', 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
            ['name'=>'Recipe', 'slug'=>'recipe', 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
            ['name'=>'Bread', 'slug'=>'bread', 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
            ['name'=>'Breakfast', 'slug'=>'breakfast', 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
            ['name'=>'Meat', 'slug'=>'meat', 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
            ['name'=>'Fastfood', 'slug'=>'fastfood', 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
            ['name'=>'Salad', 'slug'=>'salad', 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
            ['name'=>'Soup', 'slug'=>'soup', 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        ];
        DB::table('categories')->insert($categories);

        // \App\Category::insert($categories);
    }
}
