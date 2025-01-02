<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Reward;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

//		$users = User::all();
//		$events = Event::all();
//
//		foreach ($users as $user) {
//			foreach ($events as $event) {
//				Reward::create([
//					'name' => 'Participation Award',
//					'event_id' => $event->id,
//					'user_id' => $user->id,
//					'award_date' => now(),
//					'status' => 'gold',
//					'position' => rand(1,10),
//					'photo_path' => null,
//				]);
//			}
//		}

		Reward::factory()
			->count(30)
			->create();

    }
}
