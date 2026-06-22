<x-app-layout>
    <div class="max-w-6xl mx-auto p-6" x-data="{ payment: 'va' }">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left: Payment Methods -->
            <div class="lg:col-span-2 bg-white border rounded-xl p-6">
                <h2 class="font-bold text-lg mb-4">Pilih Metode Pembayaran</h2>
                <div class="grid grid-cols-3 gap-4">
                    <div @click="payment = 'shopeepay'" :class="payment === 'shopeepay' ? 'ring-2 ring-[#2b3990]' : ''" class="p-3 border rounded flex items-center gap-3 cursor-pointer">
                        <!-- ShopeePay icon (placeholder) -->
                        <svg class="w-8 h-8 text-orange-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="6" width="18" height="12" rx="2" stroke="currentColor" stroke-width="1.5"/>
                            <path d="M7 9h10M7 13h6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
                        </svg>
                        <div class="flex-1 text-left">ShopeePay</div>
                    </div>

                    <div @click="payment = 'card'" :class="payment === 'card' ? 'ring-2 ring-[#2b3990]' : ''" class="p-3 border rounded flex items-center gap-3 cursor-pointer">
                        <!-- Credit card icon -->
                        <svg class="w-8 h-8 text-gray-700" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2" y="5" width="20" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/>
                            <path d="M2 10h20" stroke="currentColor" stroke-width="1.2"/>
                        </svg>
                        <div class="flex-1 text-left">Kartu Kredit</div>
                    </div>

                    <div @click="payment = 'qris'" :class="payment === 'qris' ? 'ring-2 ring-[#2b3990]' : ''" class="p-3 border rounded flex items-center gap-3 cursor-pointer">
                        <!-- QR code icon -->
                        <svg class="w-8 h-8 text-gray-800" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="3" width="6" height="6" fill="currentColor"/>
                            <rect x="15" y="3" width="6" height="6" fill="currentColor"/>
                            <rect x="3" y="15" width="6" height="6" fill="currentColor"/>
                            <rect x="12" y="12" width="3" height="3" fill="currentColor"/>
                            <rect x="18" y="12" width="1.5" height="1.5" fill="currentColor"/>
                        </svg>
                        <div class="flex-1 text-left">QRIS</div>
                    </div>

                    <div @click="payment = 'va_mandiri'" :class="payment === 'va_mandiri' ? 'ring-2 ring-[#2b3990]' : ''" class="p-3 border rounded flex items-center gap-3 cursor-pointer">
                        <!-- Bank icon -->
                        <svg class="w-8 h-8 text-blue-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 3l8 4v2H4V7l8-4z" stroke="currentColor" stroke-width="1.2" fill="currentColor"/>
                            <path d="M4 13h16v6H4v-6z" stroke="currentColor" stroke-width="1"/>
                        </svg>
                        <div class="flex-1 text-left">VA Mandiri</div>
                    </div>

                    <div @click="payment = 'va_bri'" :class="payment === 'va_bri' ? 'ring-2 ring-[#2b3990]' : ''" class="p-3 border rounded flex items-center gap-3 cursor-pointer">
                        <svg class="w-8 h-8 text-blue-700" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.2"/>
                        </svg>
                        <div class="flex-1 text-left">VA BRI</div>
                    </div>

                    <div @click="payment = 'va_bni'" :class="payment === 'va_bni' ? 'ring-2 ring-[#2b3990]' : ''" class="p-3 border rounded flex items-center gap-3 cursor-pointer">
                        <svg class="w-8 h-8 text-blue-800" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" stroke-width="1.2"/>
                        </svg>
                        <div class="flex-1 text-left">VA BNI</div>
                    </div>
                </div>
            </div>

            <!-- Right: Order Summary -->
            <div class="bg-white border rounded-xl p-6">
                <h3 class="font-bold text-lg mb-4">Informasi Pembelian</h3>
                <div class="text-sm text-gray-600 mb-3">Jumlah: <span class="font-bold">{{ $quantity }}</span> x Rp {{ number_format($unitPrice,0,',','.') }}</div>
                <div class="text-sm text-gray-600 mb-3">Subtotal: <span class="font-bold">Rp {{ number_format($subtotal,0,',','.') }}</span></div>
                <div class="text-sm text-gray-600 mb-3">Biaya Layanan: <span class="font-bold">Rp 0</span></div>
                <div class="text-lg font-bold text-[#2b3990] mb-4">Total: Rp {{ number_format($subtotal,0,',','.') }}</div>

                <form method="POST" action="{{ route('checkout.buy') }}">
                    @csrf
                    <input type="hidden" name="service" value="{{ $service }}">
                    <input type="hidden" name="quantity" value="{{ $quantity }}">
                    <input type="hidden" name="payment_method" x-model="payment">

                    <button type="submit" class="w-full px-4 py-3 bg-[#2b3990] text-white rounded-md">Bayar Sekarang</button>
                </form>

                <div class="mt-4 text-sm text-gray-500">
                    Setelah pembayaran selesai, kuota akan otomatis ditambahkan ke akun Anda (demo).
                </div>
            </div>
        </div>

        <div class="mt-6">
            <a href="/purchase/{{ $service }}" class="text-sm text-gray-500">Kembali</a>
        </div>
    </div>
</x-app-layout>
