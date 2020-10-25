<?php

namespace App\Http\Controllers;

use App\Interpreters\BloodPressureInterpreter;
use App\Models\BloodPressure;
use Illuminate\Http\Request;

class BloodPressureController extends Controller
{
    public function index()
    {
        $readings = BloodPressure::orderBy('reading_date', 'desc')
            ->paginate(10);

        $readings->setCollection($readings->getCollection()->each(function ($reading) {
            $reading->category = (new BloodPressureInterpreter($reading))->categorise();
        }));

        return view('blood-pressure.index', compact('readings'));
    }

    public function create()
    {
        return view('blood-pressure.create');
    }
}
