<?php

namespace App\Interpreters;

use App\Models\BloodPressure;

class BloodPressureInterpreter
{
    /**
     * @var BloodPressure
     */
    public $reading;

    public function __construct(BloodPressure $reading)
    {
        $this->reading = $reading;
    }

    /**
     * Categorises the reading
     * @return string
     */
    public function categorise()
    {
        if ($this->isLow($this->reading)) {
            return 'Low';
        }

        if ($this->isNormal($this->reading)) {
            return 'Normal';
        }

        if ($this->isElevated($this->reading)) {
            return 'Elevated';
        }

        if ($this->isHypertensionStage1($this->reading)) {
            return 'Hypertension Stage 1';
        }

        if ($this->isHypertensionStage2($this->reading)) {
            return 'Hypertension Stage 2';
        }

        if ($this->isHypertensiveCrisis($this->reading)) {
            return 'Hypertensive Crisis';
        }

        return 'Unknown';
    }

    /**
     * Identifies if a reading is hypertension stage 1 or not
     * @param BloodPressure $reading
     * @return bool
     */
    public function isHypertensionStage1(BloodPressure $reading)
    {
        if ($reading->systolic >= 130 && $reading->systolic < 139) {
            return true;
        }

        if ($reading->diastolic >= 80 && $reading->diastolic < 89) {
            return true;
        }

        return false;
    }

    /**
     * Identifies if a reading is hypertension stage 2 or not
     * @param BloodPressure $reading
     * @return bool
     */
    public function isHypertensionStage2(BloodPressure $reading)
    {
        if ($reading->systolic >= 140 && $reading->systolic < 179) {
            return true;
        }

        if ($reading->diastolic >= 90 && $reading->diastolic < 119) {
            return true;
        }

        return false;
    }

    /**
     * Identifies if a reading is hypertensive crisis or not
     * @param BloodPressure $reading
     * @return bool
     */
    public function isHypertensiveCrisis(BloodPressure $reading)
    {
        return $reading->systolic >= 180 || $reading->diastolic >= 120;
    }

    /**
     * Identifies if a reading is elevated or not
     * @param BloodPressure $reading
     * @return bool
     */
    public function isElevated(BloodPressure $reading)
    {
        return ($reading->systolic >= 120 && $reading->systolic < 130) && $reading->diastolic < 80;
    }

    /**
     * Identifies if a reading is low or not
     * @param BloodPressure $reading
     * @return bool
     */
    public function isLow(BloodPressure $reading)
    {
        return $reading->systolic < 90 || $reading->diastolic < 60;
    }

    /**
     * Identifies if a reading is normal or not
     * @param BloodPressure $reading
     * @return bool
     */
    public function isNormal(BloodPressure $reading)
    {
        if ($reading->systolic >= 90 && $reading->systolic < 120 && $reading->diastolic >= 60 && $reading->diastolic < 80) {
            return true;
        }

        return false;
    }
}
