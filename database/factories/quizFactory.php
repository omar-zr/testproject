<?php

namespace Database\Factories;

use App\Models\quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

class quizFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = quiz::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question' => $this->faker->name,
            'ans2' => $this->faker->address,
            'ans1' => $this->faker->address,
            'ans3' => $this->faker->address,
            'ans4' => $this->faker->address,
            'trueans' => rand ( 1 , 4),
        ];
    }
}
