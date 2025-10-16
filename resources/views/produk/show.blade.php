@extends('layout.app')

@section('content')
<h2 class="text-xl mb-4">Detail Produk</h2>
<div class="bg-white p-4 rounded shadow">
    <p><strong>Nama:</strong> {{ $produk->nama_produk }}</p>
    <p><strong>Harga:</strong> {{ $produk->harga_produk }}</p>
    <p><strong>Stok:</strong> {{ $produk->stock_produk }}</p>
    <p><strong>Kategori:</strong> {{ $produk->kategori->nama_kategori }}</p>
</div>
@endsection
