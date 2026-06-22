<x-app-layout>
    <div class="space-y-6">
        
        <!-- Welcome Banner Card -->
        <div class="bg-white border border-gray-150 rounded-2xl p-6 md:p-8 flex flex-col md:flex-row justify-between items-center relative overflow-hidden shadow-sm">
            <div class="space-y-4 text-center md:text-left z-10">
                <div class="flex flex-col sm:flex-row sm:items-center justify-center md:justify-start gap-2">
                    <h1 class="text-2xl md:text-3xl font-extrabold text-[#2b3990]">
                        Selamat Datang Kembali, {{ Auth::user()->name }} !
                    </h1>
                    <span class="inline-flex items-center self-center px-2.5 py-0.5 rounded text-[10px] font-bold bg-blue-50 text-[#2b3990] border border-blue-150 uppercase tracking-wider">
                        PERSONAL
                    </span>
                </div>
                
                <div class="flex flex-wrap items-center justify-center md:justify-start gap-3 pt-1">
                    <!-- Stat 1: Kuota E-Meterai -->
                    <div class="flex items-center text-xs font-semibold text-[#2b3990] bg-blue-50 border border-blue-100 rounded-full px-3.5 py-1.5">
                        <svg class="w-4 h-4 mr-1.5 text-[#2b3990]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <span>Kuota E-Meterai : <span class="font-black text-sm">{{ Auth::user()->quota?->quota_balance ?? 0 }}</span></span>
                    </div>

                    <!-- Stat 2: E-Kwitansi -->
                    <div class="flex items-center text-xs font-semibold text-gray-500 bg-gray-50 border border-gray-200 rounded-full px-3.5 py-1.5">
                        <svg class="w-4 h-4 mr-1.5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                        <span>E-Kwitansi: <span class="font-bold text-gray-700">Tidak Aktif</span></span>
                    </div>
                </div>
            </div>

            <!-- Regular Badge (Info) and Illustration -->
            <div class="flex items-center space-x-6 mt-6 md:mt-0 z-10">
                <span class="hidden lg:inline-flex items-center px-2.5 py-1 rounded text-[10px] font-bold bg-gray-50 border border-gray-200 text-gray-500 uppercase tracking-widest">
                    REGULAR
                    <svg class="w-3.5 h-3.5 ml-1 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </span>

                <!-- Clean Waving Characters Vector SVG -->
                <div class="w-28 h-28 flex items-center justify-center bg-blue-50 rounded-full overflow-hidden shadow-inner">
                    <svg class="w-24 h-24 text-[#2b3990]/80" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="60" cy="60" r="50" fill="#e0f2fe"/>
                        <!-- Person 1 (Hijab/Female) -->
                        <path d="M40 70c0-10 8-15 15-15s15 5 15 15v20H40V70z" fill="#2b3990"/>
                        <circle cx="55" cy="50" r="10" fill="#fbcfe8"/>
                        <path d="M48 45c0-4 3-7 7-7s7 3 7 7v8H48v-8z" fill="#0d9488"/> <!-- Hijab fold (teal) -->
                        <path d="M35 55c2-2 5-2 5 2l-3 12-2-14z" fill="#fbcfe8"/> <!-- Wave hand left -->
                        <!-- Person 2 (Male) -->
                        <path d="M65 75c0-8 6-12 12-12s12 4 12 12v15H65V75z" fill="#0369a1"/>
                        <circle cx="77" cy="58" r="9" fill="#fef08a"/>
                        <path d="M72 52c1-3 4-4 7-3s4 3 3 6l-1 2H72v-5z" fill="#1e293b"/> <!-- Hair -->
                        <path d="M88 56c2-2 4-1 4 3l-3 10-1-13z" fill="#fef08a"/> <!-- Wave hand right -->
                    </svg>
                </div>
            </div>

            <!-- Soft background accent blobs -->
            <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-blue-50 rounded-full filter blur-3xl opacity-60"></div>
            <div class="absolute -left-10 -top-10 w-40 h-40 bg-blue-50 rounded-full filter blur-3xl opacity-60"></div>
        </div>

        <!-- Layout Grid: Main Services & Premium Plans -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            
            <!-- Left Side Services (8 Columns) -->
            <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <!-- Service 1: E-Meterai -->
                <div x-data class="bg-white border border-gray-150 rounded-2xl p-4 flex items-start justify-between space-x-3 shadow-sm hover:shadow md:transition-shadow">
                    <div class="space-y-4 flex-1">
                        <h3 class="text-lg font-bold text-gray-900">E-Meterai</h3>
                        <p class="text-xs text-gray-500 leading-relaxed">
                            Beli dan kelola e-meterai dengan mudah dan aman untuk dokumen Anda.
                        </p>
                        <a href="{{ route('purchase.emeterai') }}" class="inline-flex items-center justify-center px-4 py-2 bg-[#2b3990] hover:bg-[#1d276b] text-white text-xs font-bold rounded-md shadow-sm transition-colors">Beli Sekarang</a>
                    </div>
                    <!-- SVG Visual -->
                    <div class="w-12 h-12 bg-blue-50/50 rounded-lg flex items-center justify-center text-blue-600 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 009 11V7a3 3 0 00-3-3H5.586a1 1 0 00-.707.293l-2.414 2.414A1 1 0 002.172 7.414L4 9.242V11c0 1.62.233 3.18.665 4.665M12 11c0-3.517 1.009-6.799 2.753-9.571m3.44 2.04l-.054.09A13.916 13.916 0 0015 11v4a3 3 0 003 3h.414a1 1 0 00.707-.293l2.414-2.414a1 1 0 00.293-.707L20 12.758V11c0-1.62-.233-3.18-.665-4.665"></path></svg>
                    </div>
                </div>

                <!-- Service 2: Digital Signature -->
                <div class="bg-white border border-gray-150 rounded-2xl p-4 flex items-start justify-between space-x-3 shadow-sm hover:shadow md:transition-shadow">
                    <div class="space-y-4 flex-1">
                        <h3 class="text-lg font-bold text-gray-900">Digital Signature</h3>
                        <p class="text-xs text-gray-500 leading-relaxed">
                            Tanda tangan digital dengan mudah dan aman untuk dokumen Anda.
                        </p>
                        <a href="{{ route('purchase.signature') }}" class="inline-flex items-center justify-center px-4 py-2 bg-[#2b3990] hover:bg-[#1d276b] text-white text-xs font-bold rounded-md shadow-sm transition-colors">Beli Sekarang</a>
                    </div>
                    <!-- SVG Visual -->
                    <div class="w-12 h-12 bg-blue-50/50 rounded-lg flex items-center justify-center text-blue-600 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    </div>
                </div>

                <!-- Service 3: E-Kwitansi -->
                <div class="bg-white border border-gray-150 rounded-2xl p-4 flex items-start justify-between space-x-3 shadow-sm hover:shadow md:transition-shadow">
                    <div class="space-y-4 flex-1">
                        <h3 class="text-lg font-bold text-gray-900">E-Kwitansi</h3>
                        <p class="text-xs text-gray-500 leading-relaxed">
                            Buat E-Kwitansi profesional untuk bisnis Anda.
                        </p>
                        <div class="flex items-baseline space-x-1.5 text-xs text-gray-400">
                            <span class="line-through">Rp 33.000</span>
                            <span class="font-bold text-[#2b3990] text-sm">Rp 24.000</span>
                            <span>/bln</span>
                        </div>
                        <a href="#" class="inline-flex items-center justify-center px-4 py-2 bg-[#2b3990] hover:bg-[#1d276b] text-white text-xs font-bold rounded-md shadow-sm transition-colors">
                            Berlangganan
                        </a>
                    </div>
                    <!-- SVG Visual -->
                    <div class="w-12 h-12 bg-blue-50/50 rounded-lg flex items-center justify-center text-blue-600 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 00-2 2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                </div>

                <!-- Service 4: Verifikasi E-Meterai (Security/Feature Card) -->
                <div class="bg-gradient-to-br from-[#2b3990] to-[#1d276b] border border-[#2b3990] rounded-2xl p-6 flex flex-col justify-between shadow-sm relative overflow-hidden text-white">
                    <div class="z-10 space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-[9px] font-black uppercase tracking-widest bg-white/20 px-2 py-0.5 rounded">FITUR KEAMANAN</span>
                            <div class="flex items-center space-x-1">
                                <span class="text-xs font-extrabold bg-white text-[#2b3990] px-1.5 py-0.5 rounded-sm">resmi</span>
                            </div>
                        </div>
                        
                        <h3 class="text-lg font-bold">Verifikasi E-Meterai</h3>
                        <p class="text-[11px] text-white/95 leading-relaxed">
                            Validasi keaslian tanda tangan digital dan e-meterai pada dokumen PDF Anda secara resmi.
                        </p>
                    </div>
                    
                    <div class="pt-4 z-10">
                        <a href="#" class="inline-flex items-center text-xs font-bold bg-white text-[#2b3990] hover:bg-blue-50 px-4 py-2 rounded-lg shadow transition-colors">
                            Validasi Sekarang
                            <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                    
                    <!-- Teal accent vector circles -->
                    <div class="absolute -right-8 -bottom-8 w-24 h-24 bg-white/10 rounded-full filter blur-xl"></div>
                </div>

            </div>

            <!-- Right Side Personal Plan removed per request -->

        </div>

        <!-- Quick Stamping Section -->
        <div class="space-y-4 pt-4">
            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest block">BUBUHKAN E-METERAI</span>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Stamping Method 1: Single Stamp -->
                <div class="bg-white border border-gray-150 rounded-2xl p-4 flex flex-col md:flex-row justify-between items-center gap-4 shadow-sm hover:shadow md:transition-shadow">
                    <div class="space-y-4 flex-1 text-center md:text-left">
                        <h3 class="text-lg font-bold text-gray-900">Single Stamp</h3>
                        <p class="text-xs text-gray-500 max-w-sm">
                            Bubuhkan satu e-meterai secara cepat dengan drag-and-drop dokumen tunggal.
                        </p>
                        <a href="{{ route('stamping.index') }}" class="inline-flex items-center justify-center px-5 py-2 bg-[#2b3990] hover:bg-[#1d276b] text-white text-xs font-bold rounded-md shadow transition-colors">
                            Bubuhkan Sekarang
                        </a>
                    </div>
                    <!-- Stamp Illustration -->
                    <div class="w-20 h-20 bg-blue-50/50 rounded-2xl flex items-center justify-center text-blue-600 flex-shrink-0">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"></path></svg>
                    </div>
                </div>

                <!-- Stamping Method 2: Bulk Auto Stamp -->
                <div class="bg-white border border-gray-150 rounded-2xl p-4 flex flex-col md:flex-row justify-between items-center gap-4 shadow-sm hover:shadow md:transition-shadow">
                    <div class="space-y-4 flex-1 text-center md:text-left">
                        <h3 class="text-lg font-bold text-gray-900">Bulk Auto Stamp</h3>
                        <p class="text-xs text-gray-500 max-w-sm">
                            Bubuhkan e-meterai sekaligus pada banyak dokumen PDF secara otomatis.
                        </p>
                        <a href="#" class="inline-flex items-center justify-center px-5 py-2 bg-[#2b3990] hover:bg-[#1d276b] text-white text-xs font-bold rounded-md shadow transition-colors">
                            Bubuhkan Sekarang
                        </a>
                    </div>
                    <!-- Folder Illustration -->
                    <div class="w-20 h-20 bg-blue-50/50 rounded-2xl flex items-center justify-center text-blue-600 flex-shrink-0">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V8a2 2 0 00-2-2h-8m-4-2l2 2m0 0h4"></path></svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Purchase Modal -->
        <div x-data="{
                open: false,
                step: 1,
                service: 'emeterai',
                qty: 5,
                unit: 10000,
                paymentMethod: 'va',
                total() { return this.qty * this.unit }
            }"
            x-on:open-quick-modal.window="service = $event.detail.service || 'emeterai'; qty = 5; step = 1; open = true;"
            x-show="open"
            x-cloak
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/40">
            <div @click.away="open = false" class="bg-white rounded-xl shadow-xl w-full max-w-2xl p-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-bold">Beli Kuota — <span x-text="service === 'emeterai' ? 'E-Meterai' : 'Digital Signature'"></span></h3>
                    <button @click="open = false" class="text-gray-400 hover:text-gray-700">✕</button>
                </div>

                <form x-ref="quickForm" method="POST" action="{{ route('checkout.buy') }}" class="mt-4">
                    @csrf
                    <input type="hidden" name="service" x-bind:value="service">
                    <input type="hidden" name="payment_method" x-bind:value="paymentMethod">

                    <template x-if="step === 1">
                        <div class="space-y-3">
                            <div class="text-sm text-gray-600">Pilih jumlah keping</div>
                            <div class="flex gap-3">
                                <button type="button" @click.prevent="qty = 5" :class="qty===5 ? 'bg-[#2b3990] text-white' : 'bg-gray-100'" class="px-4 py-2 rounded">5</button>
                                <button type="button" @click.prevent="qty = 10" :class="qty===10 ? 'bg-[#2b3990] text-white' : 'bg-gray-100'" class="px-4 py-2 rounded">10</button>
                                <button type="button" @click.prevent="qty = 50" :class="qty===50 ? 'bg-[#2b3990] text-white' : 'bg-gray-100'" class="px-4 py-2 rounded">50</button>
                                <div class="flex items-center">
                                    <input type="number" name="quantity" x-model.number="qty" min="1" class="w-28 px-3 py-2 border rounded" />
                                </div>
                            </div>

                            <div class="flex items-center justify-between pt-4 border-t">
                                <div class="text-sm text-gray-600">Subtotal</div>
                                <div class="text-lg font-bold text-[#2b3990]">Rp <span x-text="total().toLocaleString()"></span></div>
                            </div>

                            <div class="pt-4 flex justify-end gap-3">
                                <button type="button" @click="open = false" class="px-4 py-2 rounded-md border">Batal</button>
                                <button type="button" @click.prevent="step = 2" :disabled="qty < 1" class="px-4 py-2 rounded-md bg-[#2b3990] text-white">Lanjutkan ke Pembayaran</button>
                            </div>
                        </div>
                    </template>

                    <template x-if="step === 2">
                        <div class="space-y-4">
                            <div class="text-sm text-gray-600">Pilih Metode Pembayaran</div>
                            <div class="grid grid-cols-3 gap-3">
                                <button type="button" @click="paymentMethod='va'" :class="paymentMethod==='va' ? 'ring-2 ring-[#2b3990]' : 'ring-0'" class="p-3 rounded bg-white border">VA Bank</button>
                                <button type="button" @click="paymentMethod='qris'" :class="paymentMethod==='qris' ? 'ring-2 ring-[#2b3990]' : 'ring-0'" class="p-3 rounded bg-white border">QRIS</button>
                                <button type="button" @click="paymentMethod='card'" :class="paymentMethod==='card' ? 'ring-2 ring-[#2b3990]' : 'ring-0'" class="p-3 rounded bg-white border">Kartu Kredit</button>
                            </div>

                            <div class="pt-4 border-t">
                                <div class="flex items-center justify-between text-sm text-gray-600">
                                    <div>Subtotal</div>
                                    <div>Rp <span x-text="total().toLocaleString()"></span></div>
                                </div>
                                <div class="flex items-center justify-between text-sm text-gray-600 mt-2">
                                    <div>Biaya Layanan</div>
                                    <div>Rp 0</div>
                                </div>
                                <div class="flex items-center justify-between text-lg font-bold text-[#2b3990] mt-4">
                                    <div>Total Pembayaran</div>
                                    <div>Rp <span x-text="total().toLocaleString()"></span></div>
                                </div>
                            </div>

                            <div class="pt-4 flex justify-end gap-3">
                                <button type="button" @click="step = 1" class="px-4 py-2 rounded-md border">Kembali</button>
                                <button type="button" @click="$refs.quickForm.submit()" class="px-4 py-2 rounded-md bg-[#2b3990] text-white">Bayar</button>
                            </div>
                        </div>
                    </template>

                </form>
            </div>
        </div>

    </div>
</x-app-layout>
