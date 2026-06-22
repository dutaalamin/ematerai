<x-guest-layout>
    <div class="min-h-screen flex flex-col md:flex-row bg-white">
        
        <!-- Left Side: Visual Panel (Visible on MD and larger) -->
        <div class="hidden md:flex md:w-1/2 bg-gradient-to-br from-indigo-950 via-slate-900 to-[#2b3990] relative overflow-hidden flex-col justify-between p-12 text-white">
            <!-- Decorative Blobs -->
            <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] rounded-full bg-[#2b3990]/10 blur-[80px]"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] rounded-full bg-indigo-500/15 blur-[100px]"></div>
            
            <!-- Top Logo/Branding -->
            <div class="z-10 flex items-center gap-2">
                <a href="/" class="text-3xl font-bold tracking-tight text-white flex items-center">
                    <span>G</span>
                    <span class="text-[#2b3990]">materai</span>
                </a>
            </div>

            <!-- Middle Illustration/Banner -->
            <div class="z-10 my-auto max-w-lg space-y-8">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#2b3990] to-indigo-500 rounded-2xl blur opacity-30 group-hover:opacity-50 transition duration-1000"></div>
                    <div class="relative bg-slate-900/60 backdrop-blur-xl border border-white/10 p-6 rounded-2xl shadow-2xl">
                        <img src="{{ asset('images/banner.png') }}" alt="E-Meterai Banner" class="w-full rounded-lg shadow-md object-cover h-48 border border-white/5 mb-6">
                        <h3 class="text-xl font-bold text-white mb-2">Beli & Bubuhkan E-Meterai Resmi</h3>
                        <p class="text-gray-300 text-sm leading-relaxed">
                            Proses pembubuhan dokumen digital cepat, resmi langsung dari PERURI, aman, dan dapat dilakukan kapan saja secara instan.
                        </p>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <div class="p-1 bg-indigo-500/20 text-indigo-400 rounded-lg border border-indigo-500/30 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-sm">Resmi & Sah Hukum</h4>
                            <p class="text-xs text-gray-400">E-Meterai sah dan diakui secara hukum untuk berbagai keperluan dokumen resmi.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <div class="p-1 bg-[#2b3990]/20 text-[#2b3990] rounded-lg border border-[#2b3990]/30 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-sm">Pembubuhan Seret & Taruh</h4>
                            <p class="text-xs text-gray-400">Mudah memposisikan meterai pada PDF Anda langsung di dalam browser.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright/Footer -->
            <div class="z-10 text-xs text-gray-500 flex justify-between items-center border-t border-white/5 pt-6">
                <span>© 2026 Gmaterai. All rights reserved.</span>
                <span class="flex gap-4">
                    <a href="#" class="hover:text-white transition">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white transition">Bantuan</a>
                </span>
            </div>
        </div>

        <!-- Right Side: Form Panel -->
        <div class="flex-1 flex flex-col justify-center py-12 px-6 sm:px-12 lg:px-20 bg-gray-50/30 relative">
            
            <!-- Mobile Logo Header -->
            <div class="md:hidden flex justify-between items-center mb-8">
                <a href="/" class="text-2xl font-bold tracking-tight text-indigo-950 flex items-center">
                    <span>G</span>
                    <span class="text-[#2b3990] font-extrabold">materai</span>
                </a>
            </div>

            <div class="mx-auto w-full max-w-md space-y-8 bg-white p-8 sm:p-10 rounded-2xl shadow-xl border border-gray-150/80">
                <div>
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                        Selamat Datang Kembali
                    </h2>
                    <p class="mt-2.5 text-sm text-gray-500">
                        Masuk untuk mengelola dan membubuhkan E-Meterai Anda.
                    </p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="space-y-5">
                        <!-- Email Address -->
                        <div class="relative">
                            <label for="email" class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Email Address</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-400 pointer-events-none">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206"></path></svg>
                                </span>
                                <input id="email" name="email" type="email" autocomplete="email" required 
                                    class="block w-full pl-11 pr-4 py-3.5 bg-gray-50/50 hover:bg-white border border-gray-250 text-gray-900 rounded-xl focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-900/10 focus:border-indigo-900 transition-all duration-200 text-sm font-medium" 
                                    placeholder="nama@email.com" value="{{ old('email', 'admin@gmaterai.com') }}">
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs" />
                        </div>

                        <!-- Password -->
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <label for="password" class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Password</label>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-xs font-medium text-[#2b3990] hover:text-[#1d276b] transition-colors">
                                        Lupa Password?
                                    </a>
                                @endif
                            </div>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-400 pointer-events-none">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                </span>
                                <input id="password" name="password" type="password" autocomplete="current-password" required 
                                    class="block w-full pl-11 pr-4 py-3.5 bg-gray-50/50 hover:bg-white border border-gray-250 text-gray-900 rounded-xl focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-900/10 focus:border-indigo-900 transition-all duration-200 text-sm font-medium" 
                                    placeholder="Masukkan password Anda" value="password">
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs" />
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox" class="h-4.5 w-4.5 text-[#2b3990] focus:ring-[#2b3990]/20 border-gray-300 rounded cursor-pointer transition">
                        <label for="remember_me" class="ml-2 block text-sm font-medium text-gray-600 cursor-pointer select-none">
                            Ingat sesi saya
                        </label>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full flex justify-center py-4 px-4 border border-transparent text-sm font-bold rounded-xl text-white bg-indigo-900 hover:bg-indigo-950 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-lg hover:shadow-indigo-900/25 transition-all duration-200 transform active:scale-[0.98]">
                            Masuk Akun
                        </button>
                    </div>

                    <div class="text-center text-sm text-gray-500 pt-4 border-t border-gray-100">
                        Belum memiliki akun? 
                        <a href="{{ route('register') }}" class="font-semibold text-[#2b3990] hover:text-[#1d276b] transition-colors">Daftar Akun Baru</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
