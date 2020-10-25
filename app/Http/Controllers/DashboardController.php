<?php

namespace App\Http\Controllers;

use App\Interpreters\BloodPressureInterpreter;
use App\Models\BloodPressure;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $readings = BloodPressure::orderBy('reading_date', 'desc')
            ->take(5)
            ->get();
        $readings->each(function ($reading) {
                $reading->category = (new BloodPressureInterpreter($reading))->categorise();
            });

        $averageReading = BloodPressure::select(
            DB::raw("COUNT(*) AS total_readings, AVG(systolic) AS systolic, AVG(diastolic) AS diastolic")
        )->first();
        $totalReadings = $averageReading->total_readings;

        return view('dashboard', compact('averageReading', 'readings', 'totalReadings'));
    }
}
