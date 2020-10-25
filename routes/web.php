<?php

use App\Http\Controllers\BloodPressureController;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
   return view('about');
})->name('about');

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('/blood-pressure')->group(function() {
        Route::get('', [BloodPressureController::class, 'index'])->name('blood-pressure.index');
        Route::get('/add', [BloodPressureController::class, 'create'])->name('blood-pressure.create');
        Route::post('/add', [BloodPressureController::class, 'store'])->name('blood-pressure.store');
        Route::delete('/{id}', [BloodPressureController::class, 'destroy'])->name('blood-pressure.delete');
        Route::get('/advice', function() {
            return view('blood-pressure.advice');
        })->name('blood-pressure.advice');

        Route::get('/export-pdf', function () {
            $snappy = App::make('snappy.pdf');

            $readings = \App\Models\BloodPressure::orderBy('reading_date')->get();
            $html = view('pdfs.blood-pressure-diary', compact('readings'));

            return new Response(
                $snappy->getOutputFromHtml($html),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment; filename="blood-pressure.pdf"'
                )
            );
        })->name('blood-pressure.export-pdf');
    });
});
