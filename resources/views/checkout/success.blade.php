<x-app-layout>
    <div class="py-16 bg-gray-50/50 min-h-[calc(100vh-80px)] flex items-center justify-center">
        <div class="max-w-md w-full mx-auto px-4 sm:px-6">
            <div class="bg-white rounded-2xl shadow-xl border border-gray-150 p-8 text-center space-y-6 relative overflow-hidden">
                <!-- Top Accent Bar -->
                <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-[#2b3990] to-[#e93570]"></div>
                
                <!-- Success Checkmark -->
                <div class="flex justify-center pt-4">
                    <div class="w-20 h-20 bg-green-50 rounded-full flex items-center justify-center text-green-500 shadow-inner">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </div>

                <div class="space-y-2">
                    <h3 class="text-2xl font-extrabold text-gray-900">Pembayaran Berhasil!</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        {{ session('success') ?? 'Pembayaran Anda telah berhasil diproses secara aman, dan kuota e-meterai Anda telah bertambah.' }}
                    </p>
                </div>

                <!-- Transaction Details Card -->
                <div class="bg-gray-50 border border-gray-150 rounded-xl p-4 text-left text-xs space-y-2 text-gray-600">
                    <div class="flex justify-between">
                        <span>Status:</span>
                        <span class="font-bold text-green-600">SUCCESS</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Waktu transaksi:</span>
                        <span class="font-medium text-gray-900">{{ now()->format('d M Y H:i') }} WIB</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Metode Pembayaran:</span>
                        <span class="font-medium text-gray-900">QRIS / Instant Payment</span>
                    </div>
                </div>

                <div class="pt-4 flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="{{ route('stamping.index') }}" class="w-full text-center px-6 py-3 bg-[#2b3990] hover:bg-[#1d276b] text-white font-bold rounded-xl shadow transition-colors text-sm">
                        Gunakan E-Meterai
                    </a>
                    <a href="{{ route('products.index') }}" class="w-full text-center px-6 py-3 bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 font-bold rounded-xl shadow-sm transition-all text-sm">
                        Beli Kuota Lagi
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
