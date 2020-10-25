<?php

namespace App\Http\Controllers;

use App\Interpreters\BloodPressureInterpreter;
use App\Models\BloodPressure;
use Carbon\Carbon;
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

    public function store(Request $request)
    {
        $request->validate([
            'systolic' => 'required|int|min:0|max:200',
            'diastolic' => 'required|int|min:0|max:200',
            'heart_rate' => 'nullable|int|min:0|max:200',
            'notes' => 'max:1000'
        ]);

        BloodPressure::create([
            'user_id' => auth()->user()->id,
            'systolic' => $request->input('systolic'),
            'diastolic' => $request->input('diastolic'),
            'heart_rate' => $request->input('heart_rate', null),
            'notes' => $request->input('notes'),
            'reading_date' => (new Carbon())->format('Y-m-d H:i:s')
        ]);

        $request->session()->flash('success', true);

        return redirect()->route('blood-pressure.index');
    }
}
