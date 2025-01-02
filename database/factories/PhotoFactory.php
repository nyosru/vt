<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    public function definition()
    {
		$w = rand(200,300);
//		$w = rand(50,100);
        return [
            'event_id' => Event::inRandomOrder()->limit(1)->value('id'),
            'user_id' => User::inRandomOrder()->limit(1)->value('id'),
//            'path' => $this->generatePlaceholderImage(),
//            'path' => '/photo.jpg',
            'path' => 'https://placebeard.it/'.$w.'x'.round($w/2),
        ];
    }

    private function generatePlaceholderImage()
    {
        $client = new Client(['base_uri' => 'https://picsum.photos']);
        $response = $client->get('300/300');
        return Str::finish($response->getBody(), '/photo.jpg');
    }

}
