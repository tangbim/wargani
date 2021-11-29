<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $post1 = [
            [
                'category_id' => rand(1, 3),
                'title' => 'Title 1',
                'slug' => 'post-one',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'title' => 'Title 2',
                'slug' => 'post-two',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'title' => 'Title 3',
                'slug' => 'post-three',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'title' => 'Title 4',
                'slug' => 'post-four',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'title' => 'Title 5',
                'slug' => 'post-five',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'title' => 'Title 6',
                'slug' => 'post-six',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'title' => 'Title 7',
                'slug' => 'post-seven',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'title' => 'Title 8',
                'slug' => 'post-eight',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'title' => 'Title 9',
                'slug' => 'post-nine',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'title' => 'Title 10',
                'slug' => 'post-ten',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],


        ];
        Article::insert($post1);
    }
}
