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
		return [
			'title' => $this->faker->sentence,
			'description' => $this->faker->paragraph,
			'content' => '<p>' . implode('</p><p>', $this->faker->paragraphs(10)) . '</p>',
			'photo' => 'https://picsum.photos/id/' . rand(0, 100) . '/300/200.jpg',
			'published_at' => now(),
		];
	}
}
