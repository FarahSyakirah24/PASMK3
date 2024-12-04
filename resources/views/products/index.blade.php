<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-amber-50 font-sans text-gray-800">
    <div class="max-w-6xl mx-auto py-10 px-6">
        <h1 class="text-4xl font-bold text-amber-800 text-center mb-10">Daftar Produk</h1>

        <!-- Tabel Produk -->
        <div class="overflow-hidden rounded-lg shadow-lg bg-white">
            <table class="w-full table-auto border-collapse">
                <thead class="bg-amber-200 text-amber-900">
                    <tr>
                        <th class="py-3 px-4 text-left font-semibold">Nama</th>
                        <th class="py-3 px-4 text-left font-semibold">Deskripsi</th>
                        <th class="py-3 px-4 text-right font-semibold">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data Produk -->
                    @foreach($products as $product)
                    <tr class="hover:bg-amber-100">
                        <td class="py-3 px-4 border-t">{{ $product->name }}</td>
                        <td class="py-3 px-4 border-t">{{ $product->description }}</td>
                        <td class="py-3 px-4 border-t text-right">Rp {{ number_format($product->price, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Jika tidak ada data -->
        @if($products->isEmpty())
        <p class="text-center text-gray-500 mt-6">Tidak ada data produk tersedia.</p>
        @endif
    </div>
</body>
</html>
