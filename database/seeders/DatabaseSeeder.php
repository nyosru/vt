<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'SerSer',
            'email' => '1@php-cat.com',
            'password' => '$2y$12$25kbkFWlIeYrx0wVr0S5R.vjKzJKuB.ne3euRWy7BEryM9suvKV2a',
        ]);

        User::factory()->create([
            'name' => 'Viktor',
            'email' => '9292000001@mail.ru',
            'password' => '$2y$12$.gVKRl3xcerDUI20F6ZXi..CKbq3XW9VrNbHFFjyRZCDiqoZf7pX6',
        ]);

		$this->call([
			EventSeeder::class,
			RewardSeeder::class,
			NewsSeeder::class,
			PhotoSeeder::class,
		]);
    }
}
