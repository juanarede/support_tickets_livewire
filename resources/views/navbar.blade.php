



<div class="top-0  lg:py-1 w-full bg-transparent lg:relative z-50 dark:bg-gray-200">
    <nav class="z-10 sticky top-0 left-0 right-0 max-w-4xl xl:max-w-5xl mx-auto px-3 py-1 lg:border-none lg:py-3">
        <div class="flex items-center justify-between">
            <button>
                <div class="flex items-center space-x-2">
                    <h2 class="text-black dark:text-black font-bold text-2xl">Logo</h2>
                </div>
            </button>
            <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-blue-600 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
            <div class="hidden lg:block">
                {{-- <ul class="flex space-x-10 text-base font-bold text-black/60 dark:text-white">
                    <li
                        class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                        <a href="#">Home</a>
                    </li>
                    <li
                        class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                        <a href="#">Our services</a>
                    </li>
                    <li
                        class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                        <a href="#">About</a>
                    </li>
                    <li
                        class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                        <a href="#">Contact</a>
                    </li>
                </ul> --}}
            </div>
            <div class="hidden lg:flex lg:items-center gap-x-2">
                <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold rounded-xl transition duration-200" href="#">Sign In</a>
    <a class="hidden lg:inline-block py-2 px-6 bg-black hover:bg-gray-600 text-sm text-white font-bold rounded-xl transition duration-200" href = "">Sign up</a>
            </div>

        </div>
    </nav>
</div>






<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-2xl font-bold leading-none" href="#">
                <h2 class="text-black dark:text-black font-bold text-2xl">Logo</h2>
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            {{-- <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Home</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">About Us</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Services</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Pricing</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Contact</a>
                </li>
            </ul> --}}
        </div>
        <div class="mt-auto">
            <div class="pt-6">
                <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="#">Sign in</a>
                <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-black hover:bg-gray-00  rounded-xl" href="#">Sign Up</a>
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


