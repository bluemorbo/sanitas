<?php

namespace Database\Factories;

use App\Models\BloodPressure;
use Illuminate\Database\Eloquent\Factories\Factory;

class BloodPressureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BloodPressure::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();

        return [
            'user_id' => 1,
            'systolic' => $faker->numberBetween(90, 119),
            'diastolic' => $faker->numberBetween(60, 79),
            'heart_rate' => $faker->numberBetween(50, 80)
        ];
    }
}
