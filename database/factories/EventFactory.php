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
            'name' => $this->faker->name,
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'userlimit' => $this->faker->numberBetween($min = 20, $max = 100),
            'start' => $this->faker->dateTime($max = '-1 month', $timezone = null),
            'end' => $this->faker->dateTime($max = 'start', $timezone = null),
            'status' => 'ACTIVO',

        ];
    }
}
