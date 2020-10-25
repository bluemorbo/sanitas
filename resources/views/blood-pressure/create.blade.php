<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('sitemap.blood-pressure-create') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium text-gray-900">Blood Pressure Reading</h3>

                        <p class="mt-1 text-sm text-gray-600">
                            Add both top (systolic) and bottom (diastolic) numbers from your blood pressure monitor. If
                            your machine also monitors heart rate, you can add that too.
                        </p>
                    </div>
                </div>


                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form method="POST" action="{{ route('blood-pressure.store') }}">
                        @csrf
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">

                                    <!-- Systolic -->
                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="systolic">
                                            Systolic (mmHg)
                                        </label>
                                        <input class="form-input rounded-md shadow-sm mt-1 block w-full" id="systolic" name="systolic" type="text" required value="{{ old('systolic') }}" maxlength="3">
                                        <x-jet-input-error for="systolic" class="mt-2" />
                                    </div>

                                    <!-- Diastolic -->
                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="diastolic">
                                            Diastolic (mmHg)
                                        </label>
                                        <input class="form-input rounded-md shadow-sm mt-1 block w-full" id="diastolic" name="diastolic" type="text" required value="{{ old('diastolic') }}" maxlength="3">
                                        <x-jet-input-error for="diastolic" class="mt-2" />
                                    </div>

                                    <!-- Heart Rate -->
                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="heart_rate">
                                            Heart Rate (BPM)
                                        </label>
                                        <input class="form-input rounded-md shadow-sm mt-1 block w-full" id="heart_rate" name="heart_rate" type="text" value="{{ old('heart_rate') }}" maxlength="3">
                                        <x-jet-input-error for="heart_rate" class="mt-2" />
                                    </div>

                                    <!-- Notes -->
                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="notes">
                                            Notes
                                        </label>
                                        <textarea class="form-input rounded-md shadow-sm mt-1 block w-full" id="notes" name="notes">{{ old('notes') }}</textarea>
                                        <x-jet-input-error for="notes" class="mt-2" />
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                    Save Reading
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
