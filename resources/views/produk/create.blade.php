@extends('layout.app')

@section('content')
<h2 class="text-xl mb-4">Tambah Produk</h2>

<form action="{{ route('produks.store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label>Nama Produk:</label>
        <input type="text" name="nama_produk" class="border p-2 w-full" required>
    </div>

    <div class="mb-4">
        <label>Harga:</label>
        <input type="number" name="harga_produk" class="border p-2 w-full" required>
    </div>

    <div class="mb-4">
        <label>Stok:</label>
        <input type="number" name="stock_produk" class="border p-2 w-full" required>
    </div>  

    <div class="mb-4">
        <label>Kategori:</label>
        <select name="kategori_id" class="border p-2 w-full" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach($kategoris as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection
