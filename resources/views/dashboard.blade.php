<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('sitemap.dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if ($readings->count() > 0)
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="mb-6 text-right">
                        <a href="{{ route('blood-pressure.create') }}" class="block text-center mx-2 md:mx-0 md:inline md:inline-flex md:items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Add a reading
                        </a>
                    </div>
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-6">
                    <div class="md:flex">
                        <div class="w-full md:w-1/2 flex content-center flex-wrap ">
                            <div class="flex w-full sm:max-w-sm px-6 py-4 bg-white shadow overflow-hidden sm:rounded-lg">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-tree-poppy-500 text-white">
                                        <i class="fas fa-heartbeat text-2xl"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Average Blood Pressure</h4>
                                    <p class="mt-2 text-3xl leading-6 text-lynch-700">
                                        {{ number_format($averageReading->systolic, 0) }} /
                                        {{ number_format($averageReading->diastolic, 0) }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex w-full sm:max-w-sm mt-6 px-6 py-4 bg-white shadow overflow-hidden sm:rounded-lg">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-crusta-500 text-white">
                                        <i class="fas fa-chart-line text-2xl"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Total Readings</h4>
                                    <p class="mt-2 text-3xl leading-6 text-lynch-700">
                                        {{ $totalReadings }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2">
                            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
                            <canvas id="myChart" class="mt-6 md:mt-0 px-6 md:px-0"></canvas>
                            <script>
                                var ctx = document.getElementById('myChart').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: @json($chartData['readingDates']),
                                        datasets: [
                                            {
                                                label: 'Systolic',
                                                fill: 'disabled',
                                                borderColor: '#43AA8B',
                                                data: @json($chartData['systolicReadings'])
                                            },
                                            {
                                                label: 'Diastolic',
                                                fill: 'disabled',
                                                borderColor: '#F8961E',
                                                data: @json($chartData['diastolicReadings'])
                                            }
                                        ]
                                    },
                                    options: {
                                        scales: {
                                            xAxes: [{
                                                gridLines: {
                                                    drawOnChartArea: false
                                                }
                                            }],
                                            yAxes: [{
                                                gridLines: {
                                                    drawOnChartArea: false
                                                }
                                            }]
                                        },
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 lg:py-6">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead>
                                        <tr>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('blood-pressure.category') }}
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('blood-pressure.reading') }}
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('blood-pressure.heart-rate') }}
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('blood-pressure.notes') }}
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('blood-pressure.reading-date') }}
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($recentReadings as $reading)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">
                                                        <x-blood-pressure-category :category="$reading->category" />
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm leading-5 font-medium text-gray-900 text-right">
                                                        {{ $reading->systolic }} / {{ $reading->diastolic }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm leading-5 text-gray-900 text-right">
                                                        {{ $reading->heart_rate ?? '-' }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm leading-5 text-gray-900">
                                                        {{ $reading->notes ?? '-' }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    <div class="text-sm leading-5 text-gray-900">
                                                        <span title="{{ $reading->reading_date }}">{{ $reading->reading_date->diffForHumans() }}</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="py-6 min-w-full text-right">
                                    <a href="{{ route('blood-pressure.index') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out text-chelsea-cucumber-600 hover:text-chelsea-cucumber-900 transition duration-150 ease-in-out">
                                        View all readings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-4 text-2xl">
                        Welcome to Sanitas
                    </div>

                    <div class="mt-6 text-gray-500">
                        <p class="">
                            Medical data should be both personal and readily available. It should also be completely under your
                            control. Here at Sanitas, we allow you to add, edit and delete all readings that you submit. What's
                            more, you're also able to export your readings to PDF so you can share it data with health professionals.
                        </p>
                        <p class="mt-2">
                            The idea behind Sanitas is that you can record your blood pressure (with more readings to come) and
                            see how it changes over time.
                        </p>
                        <p class="mt-2">
                            Once you start adding data, this screen will show you an overview of recent readings as well as your
                            average so you've got all the information you need at a glance.
                        </p>
                        <div class="mt-6 text-left">
                            <a href="{{ route('blood-pressure.create') }}" class="block text-center mx-2 md:mx-0 md:inline md:inline-flex md:items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Add a reading
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
