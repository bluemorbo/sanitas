<?php

namespace Tests\Unit\Interpreters;

use App\Interpreters\BloodPressureInterpreter;
use App\Models\BloodPressure;
use PHPUnit\Framework\TestCase;

class BloodPressureInterpreterTest extends TestCase
{
    /** @test */
    public function can_correctly_interpret_low_blood_pressure()
    {
        $reading = BloodPressure::factory([
            'systolic' => 81,
            'diastolic' => 56,
        ])->make();
        $interpreter = new BloodPressureInterpreter($reading);

        $this->assertEquals('Low', $interpreter->categorise());
    }

    /** @test */
    public function can_correctly_interpret_normal_blood_pressure()
    {
        $reading = BloodPressure::factory([
            'systolic' => 100,
            'diastolic' => 70,
        ])->make();
        $interpreter = new BloodPressureInterpreter($reading);

        $this->assertEquals('Normal', $interpreter->categorise());
    }

    /** @test */
    public function can_correctly_interpret_elevated_blood_pressure()
    {
        $reading = BloodPressure::factory([
            'systolic' => 124,
            'diastolic' => 78,
        ])->make();
        $interpreter = new BloodPressureInterpreter($reading);

        $this->assertEquals('Elevated', $interpreter->categorise());
    }

    /** @test */
    public function can_correctly_interpret_hypertension_stage_1_blood_pressure()
    {
        $reading = BloodPressure::factory([
            'systolic' => 137,
            'diastolic' => 89,
        ])->make();
        $interpreter = new BloodPressureInterpreter($reading);

        $this->assertEquals('Hypertension Stage 1', $interpreter->categorise());
    }

    /** @test */
    public function can_correctly_interpret_hypertension_stage_2_blood_pressure()
    {
        $reading = BloodPressure::factory([
            'systolic' => 148,
            'diastolic' => 89,
        ])->make();
        $interpreter = new BloodPressureInterpreter($reading);

        $this->assertEquals('Hypertension Stage 2', $interpreter->categorise());
    }

    /** @test */
    public function can_correctly_interpret_hypertensive_crisis_blood_pressure()
    {
        $reading = BloodPressure::factory([
            'systolic' => 186,
            'diastolic' => 123,
        ])->make();
        $interpreter = new BloodPressureInterpreter($reading);

        $this->assertEquals('Hypertensive Crisis', $interpreter->categorise());
    }
}
