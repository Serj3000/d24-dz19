<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000))
     * @return void
     */
    public function run()
    {
        $tags=[
            ['name'=>'CREATIVE', 'slug'=>'creative', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'UNIQUE', 'slug'=>'unique', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'TEMPLATE', 'slug'=>'template', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'PHOTOGRAPHY', 'slug'=>'photography', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'TRAVEL', 'slug'=>'travel', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'LIFESTYLE', 'slug'=>'lifestyle', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'WORDPRESS TEMPLATE', 'slug'=>'wordpress template', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'FOOD', 'slug'=>'food', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'IDEA', 'slug'=>'idea', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
        ];
        DB::table('tags')->insert($tags);

        // $tags=[
        //     ['name'=>'CREATIVE', 'slug'=>'creative'],
        //     ['name'=>'UNIQUE', 'slug'=>'unique'],
        //     ['name'=>'TEMPLATE', 'slug'=>'template'],
        //     ['name'=>'PHOTOGRAPHY', 'slug'=>'photography'],
        //     ['name'=>'TRAVEL', 'slug'=>'travel'],
        //     ['name'=>'LIFESTYLE', 'slug'=>'lifestyle'],
        //     ['name'=>'WORDPRESS TEMPLATE', 'slug'=>'wordpress template'],
        //     ['name'=>'FOOD', 'slug'=>'food'],
        //     ['name'=>'IDEA', 'slug'=>'idea'],
        // ];
        // \App\Tag::createMany($tags);
    }
}
