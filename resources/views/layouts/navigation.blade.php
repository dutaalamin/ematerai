<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex w-full justify-between items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ auth()->check() ? route('dashboard') : url('/') }}" class="flex items-center">
                        <span class="text-3xl font-extrabold text-[#2b3990] tracking-tight">G</span>
                        <span class="text-3xl font-bold text-[#2b3990] tracking-tight">materai</span>
                    </a>
                </div>

                <!-- Navigation Links (Desktop) -->
                <div class="hidden md:flex space-x-8 items-center h-full">
                    @auth
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-gray-600 hover:text-[#2b3990] font-medium">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <a href="{{ request()->routeIs('products.index') ? '#beli' : route('products.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            Beli E-Meterai
                        </a>
                        <x-nav-link :href="route('stamping.index')" :active="request()->routeIs('stamping.index')" class="text-gray-600 hover:text-[#2b3990] font-medium">
                            {{ __('Pembubuhan') }}
                        </x-nav-link>
                    @else
                        <a href="#fitur" class="text-gray-600 hover:text-[#2b3990] text-sm font-medium transition-colors">Fitur</a>
                        <a href="#beli" class="text-gray-600 hover:text-[#2b3990] text-sm font-medium transition-colors">Beli E-Meterai</a>
                        <a href="#tentang-kami" class="text-gray-600 hover:text-[#2b3990] text-sm font-medium transition-colors">Tentang Kami</a>
                        <a href="#kontak" class="text-gray-600 hover:text-[#2b3990] text-sm font-medium transition-colors">Kontak Kami</a>
                        <a href="#faq" class="text-gray-600 hover:text-[#2b3990] text-sm font-medium transition-colors">FAQ</a>
                    @endauth
                </div>

                <!-- Right Side Actions (Desktop) -->
                <div class="hidden md:flex items-center">
                    @auth
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @else
                        <div class="flex items-center space-x-4">
                            <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-6 py-2 bg-indigo-900 hover:bg-indigo-950 text-white text-sm font-semibold rounded shadow-md transition-all duration-200">
                                Login
                            </a>
                        </div>
                    @endauth
                </div>

                <!-- Hamburger (Mobile) -->
                <div class="flex items-center md:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Menu (Mobile) -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @auth
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')">
                    Beli E-Meterai
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('stamping.index')" :active="request()->routeIs('stamping.index')">
                    {{ __('Pembubuhan') }}
                </x-responsive-nav-link>
            @else
                <x-responsive-nav-link href="#fitur" @click="open = false">Fitur</x-responsive-nav-link>
                <x-responsive-nav-link href="#beli" @click="open = false">Beli E-Meterai</x-responsive-nav-link>
                <x-responsive-nav-link href="#tentang-kami" @click="open = false">Tentang Kami</x-responsive-nav-link>
                <x-responsive-nav-link href="#kontak" @click="open = false">Kontak Kami</x-responsive-nav-link>
                <x-responsive-nav-link href="#faq" @click="open = false">FAQ</x-responsive-nav-link>
            @endauth
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            @auth
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @else
                <div class="px-4 py-2 space-y-1">
                    <a href="{{ route('login') }}" class="block w-full text-center bg-indigo-900 text-white rounded py-2 hover:bg-indigo-950 text-sm font-semibold">Log in</a>
                    <a href="{{ route('register') }}" class="block w-full text-center border border-gray-300 text-gray-700 rounded py-2 mt-1 text-sm font-semibold hover:bg-gray-50">Register</a>
                </div>
            @endauth
        </div>
    </div>
</nav>
