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

        $request->session()->flash('successMessage', [
            'title' => 'Blood pressure reading saved',
            'body' => 'If you feel the reading is abnormal, wait at least one minute and take 2 further readings.'
        ]);

        return redirect()->route('blood-pressure.index');
    }

    public function destroy(Request $request, $id)
    {
        $reading = BloodPressure::find($id);

        if (!$reading) {
            $request->session()->flash('errorMessage', [
                'title' => 'Unknown reading',
                'body' => "We don't recognise that one, try again maybe?"
            ]);

            return redirect()->back();
        }

        if (!$reading->delete()) {
            $request->session()->flash('errorMessage', [
                'title' => 'Whoops, something went wrong there!',
                'body' => "I'd try again later."
            ]);

            return redirect()->back();
        }

        $request->session()->flash('successMessage', [
            'title' => 'Blood pressure reading deleted',
            'body' => "Poof! It's gone."
        ]);

        return redirect()->route('blood-pressure.index');
    }
}
