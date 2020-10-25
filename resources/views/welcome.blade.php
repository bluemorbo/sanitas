<x-guest-layout>
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('home') }}">
                            <x-jet-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-jet-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')" class="text-chelsea-cucumber-600 hover:text-chelsea-cucumber-900 transition duration-150 ease-in-out">
                            Log in
                        </x-jet-nav-link>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-jet-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')" class="text-chelsea-cucumber-600 hover:text-chelsea-cucumber-900 transition duration-150 ease-in-out">
                    Log in
                </x-jet-responsive-nav-link>
            </div>

        </div>
    </nav>


    <div class="relative bg-white overflow-hidden">
        <div class="max-w-screen-xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                </div>


                <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                            Give yourself the data you need to live
                            <br class="xl:hidden">
                            <span class="text-chelsea-cucumber-600">a healthy lifestyle</span>
                        </h2>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            See your blood pressure rise and fall with work deadlines. Watch your weight fluctuate over Christmas.
                            By tracking your health over time, you can see the choices you make impact your body and take a
                            proactive approach to your life.
                        </p>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Take your first step to a happier, healthier you with <b>Sanitas</b>.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <a href="register" class="inline-flex items-center px-6 py-4 bg-chelsea-cucumber-600 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-chelsea-cucumber-500 active:bg-chelsea-cucumber-700 focus:outline-none focus:border-chelsea-cucumber-700 focus:shadow-outline-chelsea-cucumber disabled:opacity-25 transition ease-in-out duration-150">
                                Get started
                            </a>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1543362906-acfc16c67564?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="">
        </div>
    </div>



    <div class="py-12 bg-gray-100">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-base leading-6 text-chelsea-cucumber-600 font-semibold tracking-wide uppercase"><a name="#features">Features</a></p>
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    A better way to track your well-being
                </h3>
                <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">
                    See how your lifestyle impacts your health and make informed decisions
                </p>
            </div>

            <div class="mt-10">
                <ul class="md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <li>
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-chelsea-cucumber-500 text-white">
                                    <i class="fas fa-chart-line text-2xl"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">Blood pressure</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Add systolic and diastolic readings (mmHg) with optional heart rate (BPM)
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-chelsea-cucumber-500 text-white">
                                    <i class="fas fa-tags text-2xl"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">Give data some context</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Using tags you can give meaning to the data as you record it
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-chelsea-cucumber-500 text-white">
                                    <i class="fas fa-file-export text-2xl"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">You're in control</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Export your historical readings to PDF and CSV
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-chelsea-cucumber-500 text-white">
                                    <i class="fas fa-weight text-2xl"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">More to come</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    In the future, weight tracking and mental health will be coming to Sanitas
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>




</x-guest-layout>
