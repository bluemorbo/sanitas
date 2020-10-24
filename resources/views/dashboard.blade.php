<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('sitemap.dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
        </div>
    </div>
</x-app-layout>
