<x-app-layout>
    <style>
        html {
            scroll-behavior: smooth;
        }
        .bg-blob {
            background-image: radial-gradient(circle at 10% 20%, rgba(13, 148, 136, 0.08) 0%, transparent 40%),
                              radial-gradient(circle at 90% 80%, rgba(43, 57, 144, 0.06) 0%, transparent 50%);
        }
    </style>

    <!-- Main Content wrapper with soft gradient background -->
    <div class="bg-gray-50/50 bg-blob min-h-screen font-sans antialiased overflow-x-hidden">
        
        <!-- Hero Carousel Section -->
        <div x-data="{ 
            activeSlide: 0, 
            slidesCount: 2,
            init() {
                setInterval(() => {
                    this.activeSlide = (this.activeSlide + 1) % this.slidesCount;
                }, 7000);
            }
        }" class="relative max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 md:pt-16 pb-16">
            
            <!-- Left & Right Arrow Buttons -->
            <button @click="activeSlide = activeSlide === 0 ? slidesCount - 1 : activeSlide - 1" class="absolute left-2 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-white/80 shadow-md border border-gray-150 flex items-center justify-center text-gray-500 hover:text-gray-800 hover:bg-white transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button @click="activeSlide = (activeSlide + 1) % slidesCount" class="absolute right-2 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-white/80 shadow-md border border-gray-150 flex items-center justify-center text-gray-500 hover:text-gray-800 hover:bg-white transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>

            <!-- Slides Wrapper -->
            <div class="relative min-h-[480px] md:min-h-[520px] flex items-center">
                
                <!-- Slide 1: CPNS Registration -->
                <div x-show="activeSlide === 0" 
                     x-transition:enter="transition ease-out duration-700"
                     x-transition:enter-start="opacity-0 translate-x-12"
                     x-transition:enter-end="opacity-100 translate-x-0"
                     x-transition:leave="transition ease-in duration-500 absolute w-full"
                     x-transition:leave-start="opacity-100 translate-x-0"
                     x-transition:leave-end="opacity-0 -translate-x-12"
                     class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center w-full">
                    
                    <!-- Left Slide Graphics -->
                    <div class="col-span-1 md:col-span-6 flex justify-center order-2 md:order-1">
                        <div class="relative w-80 md:w-96 transform hover:scale-[1.02] transition-transform duration-300">
                            <!-- Soft Teal Background Glow behind image -->
                            <div class="absolute -inset-4 rounded-3xl bg-blue-100/60 filter blur-xl opacity-70"></div>
                            <img src="{{ asset('images/banner.png') }}" alt="CPNS & PPPK Rekrutmen 2026" class="relative z-10 w-full rounded-2xl shadow-2xl border border-gray-100">
                        </div>
                    </div>

                    <!-- Right Slide Content -->
                    <div class="col-span-1 md:col-span-6 text-center md:text-left order-1 md:order-2 space-y-6">
                        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold bg-blue-50 text-[#2b3990] border border-blue-100 uppercase tracking-wider">
                            Info CPNS & PPPK 2026
                        </span>
                        <h1 class="text-3xl md:text-5xl font-extrabold text-[#2b3990] leading-tight">
                            e-Meterai Resmi untuk Pendaftaran CPNS & PPPK 2026
                        </h1>
                        <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                            Dukung pendaftaran CPNS & PPPK 2026 dengan e-Meterai resmi dari Gmaterai. Mitra Resmi PERURI, 100% legal dan sah, serta proses pembubuhan yang cepat dan praktis untuk seluruh dokumen pendaftaran Anda.
                        </p>
                        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4">
                            <a href="#beli" class="w-full sm:w-auto text-center px-8 py-3.5 bg-[#2b3990] hover:bg-[#1d276b] text-white font-bold rounded-full shadow-lg hover:shadow-xl transition-all hover:scale-105 duration-200">
                                Coba Sekarang
                            </a>
                            @guest
                            <a href="{{ route('register') }}" class="w-full sm:w-auto text-center px-8 py-3.5 bg-white border border-gray-200 text-[#2b3990] hover:bg-gray-50 font-bold rounded-full shadow-sm transition-all">
                                Daftar Akun Baru
                            </a>
                            @endguest
                        </div>
                    </div>
                </div>

                <!-- Slide 2: Stamping Info -->
                <div x-show="activeSlide === 1" 
                     x-transition:enter="transition ease-out duration-700"
                     x-transition:enter-start="opacity-0 translate-x-12"
                     x-transition:enter-end="opacity-100 translate-x-0"
                     x-transition:leave="transition ease-in duration-500 absolute w-full"
                     x-transition:leave-start="opacity-100 translate-x-0"
                     x-transition:leave-end="opacity-0 -translate-x-12"
                     class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center w-full"
                     style="display: none;">
                    
                    <!-- Left Slide Graphics -->
                    <div class="col-span-1 md:col-span-6 flex justify-center order-2 md:order-1">
                        <div class="relative w-80 md:w-96 transform hover:scale-[1.02] transition-transform duration-300">
                            <!-- Soft Blue Background Glow behind image -->
                            <div class="absolute -inset-4 rounded-3xl bg-blue-100/60 filter blur-xl opacity-70"></div>
                            <img src="{{ asset('images/single_stamp.png') }}" alt="Single Stamp Feature" class="relative z-10 w-full rounded-2xl shadow-2xl border border-gray-100">
                        </div>
                    </div>

                    <!-- Right Slide Content -->
                    <div class="col-span-1 md:col-span-6 text-center md:text-left order-1 md:order-2 space-y-6">
                        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold bg-blue-50 text-[#2b3990] border border-blue-100 uppercase tracking-wider">
                            Fitur Unggulan
                        </span>
                        <h1 class="text-3xl md:text-5xl font-extrabold text-[#2b3990] leading-tight">
                            Pembubuhan E-Meterai Instan via Single Stamp
                        </h1>
                        <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                            Nikmati kemudahan membubuhkan e-meterai resmi hanya dengan fitur Single Stamp. Proses seret dan taruh (drag & drop) sangat intuitif dan instan. Legalitas dokumen dijamin sah dan dapat langsung diunduh.
                        </p>
                        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4">
                            <a href="#fitur" class="w-full sm:w-auto text-center px-8 py-3.5 bg-[#2b3990] hover:bg-[#1d276b] text-white font-bold rounded-full shadow-lg hover:shadow-xl transition-all hover:scale-105 duration-200">
                                Pelajari Fitur
                            </a>
                            <a href="#beli" class="w-full sm:w-auto text-center px-8 py-3.5 bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 font-bold rounded-full shadow-sm transition-all">
                                Beli Kuota Meterai
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Dots Indicator Navigation -->
            <div class="flex justify-center space-x-3 mt-8 z-20 relative">
                <template x-for="idx in Array.from({length: slidesCount}, (_, i) => i)">
                    <button @click="activeSlide = idx" class="w-3.5 h-3.5 rounded-full transition-all duration-300" :class="activeSlide === idx ? 'bg-[#2b3990] scale-110 w-6' : 'bg-gray-300 hover:bg-gray-400'"></button>
                </template>
            </div>
        </div>

        <!-- Single Stamp Info Section -->
        <div id="fitur" class="py-20 bg-white border-y border-gray-100">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                    
                    <!-- Left side image -->
                    <div class="flex justify-center relative">
                        <div class="absolute -inset-4 rounded-3xl bg-blue-50 filter blur-2xl opacity-60"></div>
                        <img src="{{ asset('images/single_stamp.png') }}" alt="Single Stamp" class="relative z-10 w-full max-w-md rounded-2xl shadow-xl hover:scale-[1.01] transition-transform duration-300 border border-gray-50">
                    </div>

                    <!-- Right side explanation -->
                    <div class="space-y-6">
                        <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">
                            Single Stamp
                        </h2>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Fitur yang mempermudah Anda membubuhkan E-Meterai pada satu dokumen. Seret dan letakkan (drag & drop) meterai ke posisi yang diinginkan dengan cepat.
                        </p>
                        
                        <div class="space-y-4 pt-4">
                            <h3 class="font-bold text-gray-800 text-base">Hanya dengan 3 langkah mudah:</h3>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 p-1 bg-blue-100 rounded-full text-[#2b3990]">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <p class="ml-3 text-gray-700 text-base">Upload dokumen Anda dalam bentuk PDF.</p>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 p-1 bg-blue-100 rounded-full text-[#2b3990]">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <p class="ml-3 text-gray-700 text-base">Drag & drop E-Meterai ke posisi pembubuhan yang diinginkan.</p>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 p-1 bg-blue-100 rounded-full text-[#2b3990]">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <p class="ml-3 text-gray-700 text-base">Submit dokumen untuk memproses pembubuhan, lalu unduh hasilnya dari history pembubuhan.</p>
                            </div>
                        </div>

                        <div class="pt-6">
                            @auth
                            <a href="{{ route('stamping.index') }}" class="inline-flex items-center px-6 py-3 bg-[#2b3990] hover:bg-[#1d276b] text-white font-bold rounded-lg shadow transition-colors">
                                Mulai Bubuhkan Sekarang
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                            @else
                            <a href="{{ route('login') }}" class="inline-flex items-center px-6 py-3 bg-[#2b3990] hover:bg-[#1d276b] text-white font-bold rounded-lg shadow transition-colors">
                                Login untuk Mulai Pembubuhan
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
                            </a>
                            @endauth
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Services Section: replace packages with descriptive service blocks -->
        <div id="beli" class="py-20 bg-gray-50/50">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header removed per request: compact services layout -->

                <!-- Bulk Auto Stamp -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 md:gap-24 items-center mb-32">
                    <div class="space-y-6">
                        <h3 class="text-3xl font-extrabold text-gray-900">Bulk Auto Stamp</h3>
                        <p class="text-gray-600">Fitur yang memudahkan Anda membubuhkan E-Meterai ke banyak dokumen sekaligus. Atur posisi pembubuhan, simpan template, lalu proses otomatis untuk ratusan dokumen.</p>

                        <div class="space-y-3 pt-4">
                            <h4 class="font-bold text-gray-800">Hanya dengan 6 langkah mudah :</h4>
                            <ul class="space-y-3 mt-3">
                                <li class="flex items-start"><div class="flex-shrink-0 p-1 bg-blue-100 rounded-full text-[#2b3990]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg></div><span class="ml-3 text-gray-700">Upload dokumen Anda dalam bentuk PDF.</span></li>
                                <li class="flex items-start"><div class="flex-shrink-0 p-1 bg-blue-100 rounded-full text-[#2b3990]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg></div><span class="ml-3 text-gray-700">Drag & drop E-Meterai ke posisi pembubuhan yang diinginkan.</span></li>
                                <li class="flex items-start"><div class="flex-shrink-0 p-1 bg-blue-100 rounded-full text-[#2b3990]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg></div><span class="ml-3 text-gray-700">Simpan template untuk posisi pembubuhan yang sering digunakan.</span></li>
                                <li class="flex items-start"><div class="flex-shrink-0 p-1 bg-blue-100 rounded-full text-[#2b3990]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg></div><span class="ml-3 text-gray-700">Pilih template yang telah dibuat.</span></li>
                                <li class="flex items-start"><div class="flex-shrink-0 p-1 bg-blue-100 rounded-full text-[#2b3990]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg></div><span class="ml-3 text-gray-700">Pilih dokumen yang akan dibubuhi.</span></li>
                                <li class="flex items-start"><div class="flex-shrink-0 p-1 bg-blue-100 rounded-full text-[#2b3990]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg></div><span class="ml-3 text-gray-700">Upload dan jalankan proses pembubuhan massal. Hasil tersedia di history pembubuhan.</span></li>
                            </ul>
                        </div>

                        <div class="pt-6">
                            <a href="{{ route('stamping.index') }}" class="inline-flex items-center px-6 py-3 bg-[#2b3990] hover:bg-[#1d276b] text-white font-bold rounded-lg shadow transition-colors">Bubuhkan Sekarang</a>
                        </div>
                    </div>

                    <div class="flex justify-end pr-8 md:pr-20">
                        <img src="{{ asset('images/banner.png') }}" alt="Bulk Auto Stamp" class="relative z-10 w-full max-w-md rounded-2xl shadow-xl transition-transform duration-300">
                    </div>
                </div>

                <!-- Digital Signature -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 md:gap-24 items-center">
                    <div class="flex justify-start pl-8 md:pl-20 order-1 md:order-1">
                        <img src="{{ asset('images/single_stamp.png') }}" alt="Digital Signature" class="relative z-10 w-full max-w-md rounded-2xl shadow-xl transition-transform duration-300">
                    </div>

                    <div class="space-y-6 order-2 md:order-2">
                        <h3 class="text-3xl font-extrabold text-gray-900">Digital Signature</h3>
                        <p class="text-gray-600">Fitur yang memudahkan Anda menambahkan Tanda Tangan Elektronik pada dokumen. Aman dan cepat, cocok untuk dokumen yang membutuhkan otentikasi tanda tangan.</p>

                        <div class="space-y-3 pt-4">
                            <h4 class="font-bold text-gray-800">Hanya dengan 4 langkah mudah :</h4>
                            <ul class="space-y-3 mt-3">
                                <li class="flex items-start"><div class="flex-shrink-0 p-1 bg-blue-100 rounded-full text-[#2b3990]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg></div><span class="ml-3 text-gray-700">Aktivasi sertifikat digital Anda.</span></li>
                                <li class="flex items-start"><div class="flex-shrink-0 p-1 bg-blue-100 rounded-full text-[#2b3990]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg></div><span class="ml-3 text-gray-700">Upload dokumen Anda.</span></li>
                                <li class="flex items-start"><div class="flex-shrink-0 p-1 bg-blue-100 rounded-full text-[#2b3990]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg></div><span class="ml-3 text-gray-700">Tempatkan tanda tangan elektronik pada posisi yang dikehendaki.</span></li>
                                <li class="flex items-start"><div class="flex-shrink-0 p-1 bg-blue-100 rounded-full text-[#2b3990]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg></div><span class="ml-3 text-gray-700">Submit dokumen dan unduh hasilnya melalui history digital signature.</span></li>
                            </ul>
                        </div>

                        <div class="pt-6">
                            @if (Route::has('signature.index'))
                                <a href="{{ route('signature.index') }}" class="inline-flex items-center px-6 py-3 bg-[#2b3990] hover:bg-[#1d276b] text-white font-bold rounded-lg shadow transition-colors">Bubuhkan Sekarang</a>
                            @else
                                <a href="#" class="inline-flex items-center px-6 py-3 bg-[#2b3990] hover:bg-[#1d276b] text-white font-bold rounded-lg shadow transition-colors">Bubuhkan Sekarang</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tentang Kami Section -->
        <div id="tentang-kami" class="py-20 bg-white">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <span class="text-xs font-bold text-[#2b3990] tracking-widest uppercase">Mengapa Kami</span>
                    <h2 class="text-3xl font-extrabold text-[#2b3990] mt-2">Layanan E-Meterai Resmi & Terpercaya</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="p-8 rounded-2xl bg-gray-50 border border-gray-100 space-y-4">
                        <div class="inline-flex p-3 bg-blue-50 text-[#2b3990] rounded-xl">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Mitra Resmi PERURI</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Kami menyediakan meterai elektronik resmi langsung dari PERURI. Semua pembubuhan e-meterai yang diproses di sistem kami dijamin sah secara hukum berdasarkan undang-undang.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="p-8 rounded-2xl bg-gray-50 border border-gray-100 space-y-4">
                        <div class="inline-flex p-3 bg-blue-50 text-[#2b3990] rounded-xl">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Sistem Keamanan Berlapis</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Dokumen PDF Anda diproses menggunakan enkripsi tingkat tinggi di backend kami dan dihapus secara otomatis demi kerahasiaan data privasi Anda.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="p-8 rounded-2xl bg-gray-50 border border-gray-100 space-y-4">
                        <div class="inline-flex p-3 bg-indigo-50 text-indigo-600 rounded-xl">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Proses Cepat & Instan</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Tidak perlu lagi antre atau membeli meterai fisik di gerai pos. Pembelian kuota dan pembubuhan dokumen dapat diselesaikan kurang dari 2 menit saja.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div id="faq" class="py-20 bg-gray-50/50 border-t border-gray-100">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span class="text-xs font-bold text-[#2b3990] tracking-widest uppercase">Tanya Jawab</span>
                    <h2 class="text-3xl font-extrabold text-[#2b3990] mt-2">Pertanyaan yang Sering Diajukan (FAQ)</h2>
                </div>
                
                <div x-data="{ activeFaq: null }" class="space-y-4">
                    <!-- FAQ 1 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-150 overflow-hidden">
                        <button @click="activeFaq = activeFaq === 1 ? null : 1" class="w-full flex items-center justify-between p-5 text-left font-bold text-gray-800 hover:bg-gray-50 transition-colors">
                            <span>Apa itu E-Meterai?</span>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" :class="activeFaq === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="activeFaq === 1" x-collapse class="p-5 border-t border-gray-100 text-gray-650 text-sm leading-relaxed" style="display: none;">
                            E-Meterai atau Meterai Elektronik adalah salah satu jenis meterai dalam format elektronik yang memiliki ciri khusus dan mengandung unsur pengamanan yang dikeluarkan oleh Pemerintah Republik Indonesia, digunakan untuk membayar bea meterai atas dokumen elektronik.
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-150 overflow-hidden">
                        <button @click="activeFaq = activeFaq === 2 ? null : 2" class="w-full flex items-center justify-between p-5 text-left font-bold text-gray-800 hover:bg-gray-50 transition-colors">
                            <span>Apakah E-Meterai yang dijual di sini resmi?</span>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" :class="activeFaq === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="activeFaq === 2" x-collapse class="p-5 border-t border-gray-100 text-gray-650 text-sm leading-relaxed" style="display: none;">
                            Ya, 100% resmi. Kami mendistribusikan produk e-meterai yang diproduksi langsung oleh Perum PERURI. E-meterai kami sah secara hukum untuk memenuhi ketentuan administrasi dokumen CPNS, PPPK, kontrak bisnis, maupun dokumen legal lainnya.
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-150 overflow-hidden">
                        <button @click="activeFaq = activeFaq === 3 ? null : 3" class="w-full flex items-center justify-between p-5 text-left font-bold text-gray-800 hover:bg-gray-50 transition-colors">
                            <span>Bagaimana cara melakukan pembubuhan setelah membeli kuota?</span>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" :class="activeFaq === 3 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="activeFaq === 3" x-collapse class="p-5 border-t border-gray-100 text-gray-650 text-sm leading-relaxed" style="display: none;">
                            Setelah login dan membeli paket kuota, Anda cukup masuk ke halaman "Pembubuhan". Unggah dokumen PDF Anda, posisikan meterai di lokasi tanda tangan atau di tempat yang semestinya dengan menyeret kotak meterai di layar, lalu klik tombol bubuhkan. Kuota Anda akan terpotong dan dokumen siap diunduh.
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-150 overflow-hidden">
                        <button @click="activeFaq = activeFaq === 4 ? null : 4" class="w-full flex items-center justify-between p-5 text-left font-bold text-gray-800 hover:bg-gray-50 transition-colors">
                            <span>Metode pembayaran apa saja yang tersedia?</span>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" :class="activeFaq === 4 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="activeFaq === 4" x-collapse class="p-5 border-t border-gray-100 text-gray-650 text-sm leading-relaxed" style="display: none;">
                            Kami bekerja sama dengan payment gateway terpercaya untuk mendukung berbagai metode pembayaran seperti QRIS (Gopay, OVO, Dana, LinkAja), Virtual Account bank (BCA, Mandiri, BNI, BRI), serta Transfer Bank manual demi keamanan Anda.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kontak Kami Section -->
        <div id="kontak" class="py-20 bg-white">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                    
                    <!-- Left side: Contact Info -->
                    <div class="space-y-6">
                        <span class="text-xs font-bold text-[#2b3990] tracking-widest uppercase">Hubungi Kami</span>
                        <h2 class="text-3xl font-extrabold text-[#2b3990] tracking-tight">Butuh Bantuan Lebih Lanjut?</h2>
                        <p class="text-gray-600 text-base leading-relaxed">
                            Layanan pelanggan kami siap membantu Anda menyelesaikan masalah pembelian kuota e-meterai atau kendala teknis saat proses pembubuhan dokumen PDF.
                        </p>
                        
                        <div class="space-y-4 pt-4">
                            <div class="flex items-center">
                                <div class="p-3 bg-blue-50 text-[#2b3990] rounded-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <span class="ml-4 text-gray-700 font-medium">+62 821-2345-6789</span>
                            </div>
                            <div class="flex items-center">
                                <div class="p-3 bg-blue-50 text-[#2b3990] rounded-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002-2a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <span class="ml-4 text-gray-700 font-medium">support@gmaterai.com</span>
                            </div>
                            <div class="flex items-center">
                                <div class="p-3 bg-blue-50 text-[#2b3990] rounded-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <span class="ml-4 text-gray-700 font-medium">Gedung Pusat PERURI, Lt. 3, Jakarta Selatan, Indonesia</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right side: Contact Form -->
                    <div class="bg-gray-50 border border-gray-150 p-8 rounded-2xl">
                        <form @submit.prevent="alert('Pesan Anda berhasil dikirim! Kami akan menghubungi Anda segera.')" class="space-y-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" required class="w-full px-4 py-2.5 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
                                <input type="email" required class="w-full px-4 py-2.5 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Isi Pesan Anda</label>
                                <textarea rows="4" required class="w-full px-4 py-2.5 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm"></textarea>
                            </div>
                            <button type="submit" class="w-full text-center py-3 bg-[#2b3990] hover:bg-[#1d276b] text-white font-bold rounded-lg transition-colors text-sm shadow">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-gray-900 text-gray-400 py-12 border-t border-gray-800">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Brand info -->
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <span class="text-3xl font-extrabold text-white tracking-tight">G</span>
                            <span class="text-3xl font-bold text-[#2b3990] tracking-tight">materai</span>
                        </div>
                        <p class="text-sm leading-relaxed">
                            Penyedia layanan e-meterai resmi terintegrasi dengan PERURI. Memberikan kepastian legalitas bagi seluruh administrasi dokumen digital Anda.
                        </p>
                    </div>
                    
                    <!-- Navigation footer -->
                    <div>
                        <h4 class="text-white font-semibold text-sm mb-4">Navigasi</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#fitur" class="hover:text-white transition-colors">Fitur</a></li>
                            <li><a href="#beli" class="hover:text-white transition-colors">Beli E-Meterai</a></li>
                            <li><a href="#tentang-kami" class="hover:text-white transition-colors">Tentang Kami</a></li>
                            <li><a href="#faq" class="hover:text-white transition-colors">FAQ</a></li>
                        </ul>
                    </div>

                    <!-- Legal info -->
                    <div>
                        <h4 class="text-white font-semibold text-sm mb-4">Legalitas</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Undang-Undang ITE</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Sertifikasi PERURI</a></li>
                        </ul>
                    </div>

                    <!-- PERURI Note -->
                    <div>
                        <h4 class="text-white font-semibold text-sm mb-4">Distributor Resmi</h4>
                        <p class="text-xs leading-relaxed">
                            Layanan ini tunduk pada peraturan bea meterai elektronik Republik Indonesia. Seluruh proses stamping dan verifikasi e-meterai dilakukan di bawah pengawasan Perum PERURI.
                        </p>
                    </div>
                </div>
                
                <div class="border-t border-gray-800 mt-12 pt-8 text-center text-xs">
                    <p>&copy; 2026 Gmaterai. Hak Cipta Dilindungi Undang-Undang.</p>
                </div>
            </div>
        </footer>

    </div>
</x-app-layout>
