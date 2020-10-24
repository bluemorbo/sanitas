<?php

namespace Database\Seeders;

use App\Models\BloodPressure;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BloodPressureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BloodPressure::factory()
            ->times(50)
            ->create(function () {
                $faker = Factory::create();

                return [
                    'reading_date' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s')
                ];
            });
    }
}
