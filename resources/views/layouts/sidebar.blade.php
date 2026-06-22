<!-- Sidebar Container -->
<div :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" 
     class="fixed inset-y-0 left-0 z-40 w-64 bg-white border-r border-gray-150 flex flex-col justify-between transition-transform duration-300 md:translate-x-0 md:static md:h-screen">
    
    <div class="flex flex-col">
        <!-- Logo Section -->
        <div class="h-20 px-6 flex items-center border-b border-gray-50">
            <a href="{{ auth()->check() ? route('dashboard') : url('/') }}" class="flex items-center">
                <span class="text-3xl font-extrabold text-[#2b3990] tracking-tight">G</span>
                <span class="text-3xl font-bold text-[#2b3990] tracking-tight">materai</span>
            </a>
        </div>

        <!-- Quota Information Badges -->
        <div class="p-3 space-y-2 border-b border-gray-50">
            <!-- Quota E-Meterai -->
            <div class="flex items-center p-2 rounded-lg border border-blue-100 bg-blue-50/50 text-[#2b3990]">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                <span class="text-xs font-semibold">Kuota E-Meterai : <span class="text-xs font-bold">{{ Auth::user()->quota?->quota_balance ?? 0 }}</span></span>
            </div>
            
            <!-- Quota Digital Signature -->
            <div class="flex items-center p-2 rounded-lg border border-blue-100 bg-blue-50/50 text-[#2b3990]">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                <span class="text-xs font-semibold">Kuota Digital Signature : <span class="text-xs font-bold">0</span></span>
            </div>
        </div>

        <!-- Navigation Links -->
        <nav class="p-3 space-y-1">
            <!-- Dashboard (Active) -->
            <a href="{{ route('dashboard') }}" 
               class="flex items-center justify-between px-4 py-3 rounded-lg text-sm font-bold transition-all {{ request()->routeIs('dashboard') ? 'bg-indigo-50/80 text-[#2b3990] border-r-4 border-[#2b3990]' : 'text-gray-600 hover:bg-gray-50' }}">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3 {{ request()->routeIs('dashboard') ? 'text-[#2b3990]' : 'text-gray-400' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <span>Dashboard</span>
                </div>
            </a>

            <!-- Personal Plan: removed per request -->

            <!-- Digital Signature -->
            <a href="#" class="flex items-center justify-between px-4 py-3 rounded-lg text-sm font-semibold text-gray-600 hover:bg-gray-50 transition-all">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    <span>Digital Signature</span>
                </div>
            </a>

            <!-- E-Kwitansi -->
            <a href="#" class="flex items-center justify-between px-4 py-3 rounded-lg text-sm font-semibold text-gray-600 hover:bg-gray-50 transition-all">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <span>E-Kwitansi</span>
                </div>
            </a>

            <!-- Riwayat -->
            <a href="#" class="flex items-center justify-between px-4 py-3 rounded-lg text-sm font-semibold text-gray-600 hover:bg-gray-50 transition-all">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Riwayat</span>
                </div>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            </a>

            <!-- Pengaturan -->
            <a href="{{ route('profile.edit') }}" 
               class="flex items-center justify-between px-4 py-3 rounded-lg text-sm font-semibold transition-all {{ request()->routeIs('profile.edit') ? 'bg-indigo-50/80 text-[#2b3990] border-r-4 border-[#2b3990]' : 'text-gray-600 hover:bg-gray-50' }}">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3 {{ request()->routeIs('profile.edit') ? 'text-[#2b3990]' : 'text-gray-400' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span>Pengaturan</span>
                </div>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            </a>

            <!-- FAQ: removed from sidebar per request -->

            <!-- Verifikasi E-Meterai PERURI -->
            <a href="#" class="flex items-center justify-between px-4 py-3 rounded-lg text-sm font-semibold text-gray-600 hover:bg-gray-50 transition-all">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    <span>Verifikasi E-Meterai PERURI</span>
                </div>
            </a>
        </nav>
    </div>

    <!-- Bottom PERURI Card -->
    <div class="p-4">
        <div class="bg-blue-50/50 border border-blue-100 rounded-xl p-3.5 text-center flex flex-col items-center justify-center space-y-2">
            <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest">Distributor Resmi</span>
            <div class="flex items-center space-x-1.5 text-blue-900 font-black tracking-wider text-sm">
                <svg class="w-5 h-5 text-blue-600 animate-spin-slow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                <span>PERURI</span>
            </div>
        </div>
    </div>

</div>

<!-- Mobile overlay background -->
<div x-show="sidebarOpen" 
     @click="sidebarOpen = false" 
     class="fixed inset-0 z-30 bg-black/40 md:hidden"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     style="display: none;">
</div>
