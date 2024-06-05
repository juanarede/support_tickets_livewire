



<div class="top-0 z-50 w-full bg-transparent lg:py-1 lg:relative dark:bg-gray-200">
    <nav class="sticky top-0 left-0 right-0 z-10 max-w-4xl px-3 py-1 mx-auto xl:max-w-5xl lg:border-none lg:py-3">
        <div class="flex items-center justify-between">
            <button>
                <div class="flex items-center space-x-2">
                    <h2 class="text-2xl font-bold text-black dark:text-black">Logo</h2>
                </div>
            </button>
            <div class="lg:hidden">
            <button class="flex items-center p-3 text-blue-600 navbar-burger">
                <svg class="block w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
            <div class="hidden lg:block">
                {{-- <ul class="flex space-x-10 text-base font-bold text-black/60 dark:text-white">
                    <li
                        class="transition-all duration-100 ease-linear hover:underline hover:underline-offset-4 hover:w-fit">
                        <a href="#">Home</a>
                    </li>
                    <li
                        class="transition-all duration-100 ease-linear hover:underline hover:underline-offset-4 hover:w-fit">
                        <a href="#">Our services</a>
                    </li>
                    <li
                        class="transition-all duration-100 ease-linear hover:underline hover:underline-offset-4 hover:w-fit">
                        <a href="#">About</a>
                    </li>
                    <li
                        class="transition-all duration-100 ease-linear hover:underline hover:underline-offset-4 hover:w-fit">
                        <a href="#">Contact</a>
                    </li>
                </ul> --}}
            </div>
            <div class="hidden lg:flex lg:items-center gap-x-2">
                @auth
                    @livewire('layouts.avatar-dropdown')
                @else
                    <a class="hidden px-6 py-2 text-sm font-bold text-gray-900 transition duration-200 lg:inline-block lg:ml-auto lg:mr-3 bg-gray-50 hover:bg-gray-100 rounded-xl" href="{{ route('login') }}">Sign In</a>
                    <a class="hidden px-6 py-2 text-sm font-bold text-white transition duration-200 bg-black lg:inline-block hover:bg-gray-600 rounded-xl" href="{{ route('register') }}">Sign Up</a>
                @endauth
            </div>
        </div>
    </nav>
</div>






<div class="relative z-50 hidden navbar-menu">
    <div class="fixed inset-0 bg-gray-800 opacity-25 navbar-backdrop"></div>
    <nav class="fixed top-0 bottom-0 left-0 flex flex-col w-5/6 max-w-sm px-6 py-6 overflow-y-auto bg-white border-r">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-2xl font-bold leading-none" href="#">
                <h2 class="text-2xl font-bold text-black dark:text-black">Logo</h2>
            </a>
            <button class="navbar-close">
                <svg class="w-6 h-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            {{-- <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-blue-50 hover:text-blue-600" href="#">Home</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-blue-50 hover:text-blue-600" href="#">About Us</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-blue-50 hover:text-blue-600" href="#">Services</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-blue-50 hover:text-blue-600" href="#">Pricing</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-blue-50 hover:text-blue-600" href="#">Contact</a>
                </li>
            </ul> --}}
        </div>
        <div class="mt-auto">
            <div class="pt-6">
                <a class="block px-4 py-3 mb-3 text-xs font-semibold leading-none leading-loose text-center bg-gray-50 hover:bg-gray-100 rounded-xl" href="#">Sign in</a>
                <a class="block px-4 py-3 mb-2 text-xs font-semibold leading-loose text-center text-white bg-black hover:bg-gray-00 rounded-xl" href="#">Sign Up</a>
            </div>

        </div>
    </nav>
</div>


<script>

    document.addEventListener('DOMContentLoaded', function() {

        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }


        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
    </script>


