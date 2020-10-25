<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('sitemap.blood-pressure') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if(Session::has('success'))
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-chelsea-cucumber-400 rounded-lg text-chelsea-cucumber-900 px-4 py-3 mb-4" role="alert">
                <div class="flex">
                    <div>
                        <p class="font-bold">Blood pressure reading saved</p>
                        <p class="text-sm">If you feel the reading is abnormal, wait 5 minutes and take 2 more readings.</p>
                    </div>
                </div>
            </div>
        </div>
        @endif

    @if($readings->count() > 0)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 text-right">
                <a href="{{ route('blood-pressure.advice') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out text-chelsea-cucumber-600 hover:text-chelsea-cucumber-900 transition duration-150 ease-in-out mr-4">
                    Blood Pressure Categories
                </a>

                <a href="{{ route('blood-pressure.create') }}" class="block text-center mx-2 md:mx-0 md:inline md:inline-flex md:items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    Add a reading
                </a>
            </div>
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
                                    <th class="px-6 py-3 bg-gray-50"></th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($readings as $reading)
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
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                        {{--<a href="#" class="text-chelsea-cucumber-600 hover:text-chelsea-cucumber-900">Edit</a>--}}
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="py-6 min-w-full">
                            {{ $readings->links('vendor.pagination.tailwind') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-2xl font-medium text-gray-900">You've not got any blood pressure readings yet</h1>
            <p class="mt-1 text-lg text-gray-600">
                Before we can show you historical readings, you'll have to give us some readings!
            </p>
            <div class="mt-4">
            <a href="{{ route('blood-pressure.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                Add a reading
            </a>
            </div>
        </div>
    @endif
    </div>
</x-app-layout>
