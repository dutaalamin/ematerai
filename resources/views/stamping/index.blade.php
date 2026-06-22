<x-app-layout>
    <div class="py-12 bg-gray-50/50 min-h-[calc(100vh-80px)]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <!-- Header Section -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 bg-white p-6 rounded-2xl shadow-sm border border-gray-150">
                <div>
                    <h2 class="text-2xl font-extrabold text-gray-900">Pembubuhan E-Meterai</h2>
                    <p class="text-sm text-gray-500 mt-1">Unggah dokumen PDF Anda dan bubuhkan e-meterai resmi secara instan.</p>
                </div>
                <div class="bg-blue-50/80 border border-blue-100 rounded-xl px-5 py-3 text-right flex flex-col items-end">
                    <span class="text-xs font-semibold text-[#2b3990] uppercase tracking-wider">Kuota Tersedia</span>
                    <span class="text-2xl font-black text-[#2b3990] mt-0.5">{{ $quota ? $quota->quota_balance : 0 }} <span class="text-sm font-medium text-gray-500">Keping</span></span>
                </div>
            </div>

            <!-- Upload and Process Section -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-150 p-6 md:p-8 space-y-6">
                <div>
                    <h3 class="text-lg font-bold text-gray-900">Unggah Dokumen Baru</h3>
                    <p class="text-xs text-gray-500 mt-0.5">Dokumen harus dalam format PDF resmi dengan ukuran maksimal 5MB.</p>
                </div>

                @if(session('success'))
                    <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3.5 rounded-xl text-sm flex items-center">
                        <svg class="w-5 h-5 mr-2.5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3.5 rounded-xl text-sm flex items-center">
                        <svg class="w-5 h-5 mr-2.5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>{{ session('error') }}</span>
                    </div>
                @endif

                <form action="{{ route('stamping.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    <!-- Drag and Drop Dropzone -->
                    <div x-data="{ isDragging: false }" 
                         @dragover.prevent="isDragging = true" 
                         @dragleave.prevent="isDragging = false" 
                         @drop.prevent="isDragging = false; $refs.fileInput.files = $event.dataTransfer.files"
                         :class="isDragging ? 'border-[#2b3990] bg-blue-50/20' : 'border-gray-300 hover:border-gray-400 bg-gray-50/50'"
                         class="border-2 border-dashed rounded-2xl p-8 md:p-12 text-center transition-all cursor-pointer relative">
                        
                        <input type="file" name="document" id="document" accept="application/pdf" x-ref="fileInput" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" required
                               @change="$dispatch('file-selected', $event.target.files[0].name)">
                        
                        <div class="space-y-4">
                            <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto text-[#2b3990]">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            </div>
                            <div class="space-y-1">
                                <p class="text-sm font-semibold text-gray-800">Pilih berkas PDF atau seret ke sini</p>
                                <p class="text-xs text-gray-400">PDF hingga ukuran 5 MB</p>
                            </div>
                            <!-- Selected File Banner -->
                            <div x-data="{ selectedName: '' }" @file-selected.window="selectedName = $event.detail" x-show="selectedName" style="display: none;" class="mt-4 inline-flex items-center px-3 py-1.5 bg-blue-50 border border-blue-100 rounded-lg text-xs font-bold text-[#2b3990]">
                                <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                <span x-text="selectedName"></span>
                            </div>
                        </div>
                    </div>

                    @error('document')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror

                    <div class="flex items-center justify-between border-t border-gray-100 pt-6">
                        <div class="flex items-center text-xs text-gray-500">
                            <svg class="w-4 h-4 mr-1.5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>Proses ini akan memotong 1 kuota e-meterai Anda.</span>
                        </div>
                        <button type="submit" class="inline-flex items-center px-6 py-2.5 bg-[#e93570] hover:bg-[#d0255a] text-white font-bold rounded-lg text-sm shadow transition-colors"
                                {{ (!$quota || $quota->quota_balance <= 0) ? 'disabled' : '' }}>
                            Bubuhkan Sekarang
                        </button>
                    </div>
                </form>
            </div>

            <!-- Stamping History -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-150 p-6 md:p-8 space-y-6">
                <div>
                    <h3 class="text-lg font-bold text-gray-900">Riwayat Pembubuhan</h3>
                    <p class="text-xs text-gray-500 mt-0.5">Daftar berkas PDF yang telah berhasil dibubuhi e-meterai resmi.</p>
                </div>
                
                @if($histories->isEmpty())
                    <div class="text-center py-10 border border-dashed border-gray-200 rounded-xl">
                        <svg class="w-12 h-12 text-gray-300 mx-auto mb-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <p class="text-gray-400 text-sm">Belum ada riwayat pembubuhan dokumen.</p>
                    </div>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-100">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Nama File</th>
                                    <th class="px-4 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Tanggal Pembubuhan</th>
                                    <th class="px-4 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach($histories as $history)
                                <tr class="hover:bg-gray-50/50 transition-colors">
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-semibold text-gray-800 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                        {{ $history->filename }}
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-550">
                                        {{ $history->created_at->format('d M Y H:i') }} WIB
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-green-50 text-green-700 border border-green-100 uppercase tracking-wide">
                                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-1.5 animate-pulse"></span>
                                            {{ $history->status }}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>
