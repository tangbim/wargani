<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = [
            [
                'category_id' => rand(1, 2),
                'title' => 'Title 1',
                'slug' => 'post-one',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 2),
                'title' => 'Title 2',
                'slug' => 'post-two',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        Article::insert($post1);
    }
}
