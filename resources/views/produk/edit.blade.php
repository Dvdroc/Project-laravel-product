@extends('layout.app')

@section('content')
<h2 class="text-xl mb-4">Edit Produk</h2>
<form action="{{ route('produks.update',$produk->id) }}" method="POST" class="space-y-4">
    @csrf @method('PUT')
    <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="border p-2 w-full">
    <input type="number" name="harga_produk" value="{{ $produk->harga_produk }}" class="border p-2 w-full">
    <input type="number" name="stock_produk" value="{{ $produk->stock_produk }}" class="border p-2 w-full">
    <select name="kategori_id" class="border p-2 w-full">
        @foreach($kategoris as $kategori)
        <option value="{{ $kategori->id }}" {{ $produk->kategori_id == $kategori->id ? 'selected' : '' }}>
            {{ $kategori->nama_kategori }}
        </option>
        @endforeach
    </select>
    <button class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
