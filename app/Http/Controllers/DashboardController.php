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
            ->take(20)
            ->get();

        $recentReadings = $readings->each(function ($reading) {
                $reading->category = (new BloodPressureInterpreter($reading))->categorise();
            })
            ->take(5);

        // Reverse so we display the graph from most recent readings from oldest to newest
        $chartData = $this->getChartData($readings);

        $averageReading = BloodPressure::select(
            DB::raw("COUNT(*) AS total_readings, AVG(systolic) AS systolic, AVG(diastolic) AS diastolic")
        )->first();
        $totalReadings = $averageReading->total_readings;

        return view('dashboard', compact(
            'averageReading',
            'readings',
            'recentReadings',
            'totalReadings',
            'chartData'
        ));
    }

    protected function getChartData($readings)
    {
        $readings = $readings->reverse()->values();
        $chartData = [];
        $chartData['readingDates'] = $readings->map(function ($reading) {
            return $reading->reading_date->format('d/m');
        });
        $chartData['systolicReadings'] = $readings->map(function ($reading) {
            return $reading->systolic;
        });
        $chartData['diastolicReadings'] = $readings->map(function ($reading) {
            return $reading->diastolic;
        });

        return $chartData;
    }
}
