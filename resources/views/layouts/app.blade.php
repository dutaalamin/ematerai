<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Tailwind CSS via CDN (Bypass Vite error) -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Alpine.js (Required for Breeze dropdowns and interactive elements) -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="font-sans antialiased text-gray-800">
        @auth
            <!-- Sidebar Layout for Authenticated Users -->
            <div class="min-h-screen flex bg-[#f8fafc]" x-data="{ sidebarOpen: false }">
                <!-- Sidebar Component -->
                @include('layouts.sidebar')

                <!-- Main Content Area -->
                <div class="flex-1 flex flex-col min-h-screen overflow-y-auto">
                    <!-- Top Dashboard Header -->
                    @include('layouts.dashboard-header')

                    <!-- Page Content Slot -->
                    <main class="flex-grow p-4 sm:p-6 md:p-8">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        @else
            <!-- Standard Layout for Guest (Landing Page) -->
            <div class="min-h-screen bg-gray-50/50">
                @include('layouts.navigation')

                <!-- Page Content Slot -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        @endauth
    </body>
</html>
