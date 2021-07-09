<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst.
        Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem.';
        $description = 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.';
        
        DB::table('posts')->insert([
            'title' => 'JUST A SIMPLE BLOG POST 1',
            'content' => $content,
            'user_id' => 1,
            'created_at' => now(),
            'thumbnail' => 'blog-1.jpg',
            'description' => $description
        ]);
        DB::table('posts')->insert([
            'title' => 'JUST A SIMPLE BLOG POST 2',
            'content' => $content,
            'user_id' => 2,
            'created_at' => now(),
            'thumbnail' => 'blog-2.jpg',
            'description' => $description
        ]);
        DB::table('posts')->insert([
            'title' => 'JUST A SIMPLE BLOG POST 3',
            'content' => $content,
            'user_id' => 3,
            'created_at' => now(),
            'thumbnail' => 'blog-3.jpg',
            'description' => $description
        ]);
        DB::table('posts')->insert([
            'title' => 'JUST A SIMPLE BLOG POST 4',
            'content' => $content,
            'user_id' => 3,
            'created_at' => now(),
            'thumbnail' => 'blog-3.jpg',
            'description' => $description
        ]);
    }
}
