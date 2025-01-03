<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = News::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		$w = rand(200,300);
		return [
			'title' => $this->faker->sentence,
			'description' => $this->faker->paragraph,
			'content' => '<p>' . implode('</p><p>', $this->faker->paragraphs(10)) . '</p>',
//			'photo' => 'https://picsum.photos/id/' . rand(0, 100) . '/300/200.jpg',
//			'photo' => 'https://placekitten.com/240/120',
//			'photo' => 'https://baconmockup.com/240/120',
			'photo' => 'https://baconmockup.com/'.$w.'/'.round($w/100*60),
			'published_at' => date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']-(rand(1,900)*1000) ),
		];
	}
}
