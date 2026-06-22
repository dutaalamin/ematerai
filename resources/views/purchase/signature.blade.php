<x-app-layout>
    <div class="max-w-5xl mx-auto p-6">
        <h1 class="text-2xl font-bold text-[#2b3990] mb-4">Beli Kuota Digital Signature</h1>
        <p class="text-gray-600 mb-6">Pilih jumlah kuota tanda tangan digital. Harga per kuota: <strong>Rp 10.000</strong>.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white border rounded-xl p-6 text-center">
                <div class="text-sm text-gray-500">5 Kuota</div>
                <div class="text-2xl font-bold mt-2">Rp 50.000</div>
                <a href="{{ route('checkout.page', ['service' => 'signature', 'quantity' => 5]) }}" class="mt-4 inline-block px-4 py-2 bg-[#2b3990] text-white rounded-md">Beli 5</a>
            </div>

            <div class="bg-white border rounded-xl p-6 text-center">
                <div class="text-sm text-gray-500">10 Kuota</div>
                <div class="text-2xl font-bold mt-2">Rp 100.000</div>
                <a href="{{ route('checkout.page', ['service' => 'signature', 'quantity' => 10]) }}" class="mt-4 inline-block px-4 py-2 bg-[#2b3990] text-white rounded-md">Beli 10</a>
            </div>

            <div class="bg-white border rounded-xl p-6 text-center">
                <div class="text-sm text-gray-500">50 Kuota</div>
                <div class="text-2xl font-bold mt-2">Rp 500.000</div>
                <a href="{{ route('checkout.page', ['service' => 'signature', 'quantity' => 50]) }}" class="mt-4 inline-block px-4 py-2 bg-[#2b3990] text-white rounded-md">Beli 50</a>
            </div>
        </div>

        <div class="mt-8">
            <a href="/dashboard" class="text-sm text-gray-500">Kembali ke Dashboard</a>
        </div>
    </div>
</x-app-layout>
