<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'title' => $this->faker->sentence(3),
        'description'=> $this->faker->paragraph(1),
        'price'=> $this->faker->randomFloat($maxDecimal = 2, $min =3, $max = 100),
        'stock'=> $this->faker->numberBetween(1,10),
        'status'=> $this->faker->randomElement(['available', 'unavailable']),
        'venue'=> $this->faker->sentence(10),
       // 'duration'=> $this->faker->word,
       // 'event_date'=> $this->faker->dateTimeBetween('-30 days', '+30 days'),
       // 'hour' => $this->faker->time('H:00'),

        ];
    }
}
