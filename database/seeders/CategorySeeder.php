<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $category = [
            [
                'name' => 'Soccer',
                'slug' => 'soccer',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Basketball',
                'slug' => 'basketball',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Badminton',
                'slug' => 'badminton',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        Category::insert($category);
    }
}
