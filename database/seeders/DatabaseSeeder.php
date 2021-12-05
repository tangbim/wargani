<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ArticleSeeder::class,
            CategorySeeder::class,
        ]);
        $user1 = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'is_admin' => 1,
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'bola.net',
                'email' => 'bolanet@wargani.com',
                'is_admin' => 0,
                'password' => bcrypt('bolanet123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sport Detik',
                'email' => 'sportdetik@wargani.com',
                'is_admin' => 0,
                'password' => bcrypt('sportdetik123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Medcom',
                'email' => 'medcom@wargani.com',
                'is_admin' => 0,
                'password' => bcrypt('medcom123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        User::insert($user1);
    }
}
