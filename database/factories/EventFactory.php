<?php

namespace Database\Factories;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{

    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
$w = rand(200,300);
//$w = rand(50,100);
        return [
            'name' => $this->faker->sentence,
//			'photo_path' => 'https://picsum.photos/id/' . rand(0, 100) . '/300/200.jpg',
//			'photo_path' => 'https://loremflickr.com/'.$w.'/'.round($w/2),
//			'photo_path' => 'https://via.assets.so/game.jpg?w='.$w.'&h='.round($w/2),
			'photo_path' => 'https://placebeard.it/'.$w.'x'.round($w/2),
            'date' => Carbon::now()->addDays(rand(-30, 30)),
            'date_finish' => Carbon::now()->addDays(rand(1, 10))->format('Y-m-d'),
            'show' => rand(0, 3) > 0 ? true : false ,
        ];
    }
}
