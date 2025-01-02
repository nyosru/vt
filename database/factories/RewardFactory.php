<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Reward;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reward>
 */
class RewardFactory extends Factory
{
	protected $model = Reward::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
//		$position = $this->faker->optional()->numberBetween(1, 10);
		$position = rand(1, 7);

		// Получаем события, дата которых меньше текущей
		$event = Event::where('date', '<', now())->inRandomOrder()->first();

		return [
			'name' => $this->faker->sentence(3),
//			'event_id' => Event::factory(),
			'event_id' => $event->id,
			'user_id' => User::factory(),
//			'award_date' => $this->faker->date(),
			'award_date' => $event->date,
//			'status' => $this->faker->randomElement(['gold', 'silver', 'bronze', null]),
			'status' => ($position == 1 ? 'gold' : ($position == 2 ? 'silver' : ($position == 3 ? 'bronze' : null))),
			'position' => $position,
			'photo_path' => $this->faker->optional()->imageUrl(),
		];
	}
}
