<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">
    <h1 class="text-2xl font-bold mb-6">Aplikasi Manajemen Produk</h1>
    <div class="mb-4">
        <a href="{{ route('produks.index') }}" class="text-blue-500 mr-4">Daftar Produk</a>
        <a href="{{ route('produks.create') }}" class="text-green-500">Tambah Produk</a>
    </div>
    <div>
        @yield('content')
    </div>
</body>
</html>
