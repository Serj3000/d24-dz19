<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use app\Post;
use app\Tag;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //| Вариант 1.
        //|----------------------------------------------------------------------------------------------------------------------
        //|
        // $postTags=[
        //                 ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //                 ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //                 ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //                 ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        //     ['post_id'=>rand(1,50), 'tag_id'=>rand(1,8), 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        // ];

        // DB::table('post_tags')->insert($postTags);

        //|Вариант 2.
        //|----------------------------------------------------------------------------------------------------------------------
        //|

        foreach(\App\Post::all() as $post_id){
            $limit=rand(3,6);
            $tagsId=\App\Tag::inRandomOrder()->limit($limit)->get();

            foreach($tagsId as $tag_id){
                $postTags[]=['post_id'=>$post_id->id, 'tag_id'=>$tag_id->id, 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')];
            }
        }
        DB::table('post_tag')->insert($postTags);
    }
}
