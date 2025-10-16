@extends('layout.app')

@section('content')
<h2 class="text-xl mb-4">Daftar Produk</h2>
<table class="table-auto w-full border">
    <tr class="bg-gray-200">
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </tr>
    @foreach($produks as $produk)
    <tr>
        <td>{{ $produk->nama_produk }}</td>
        <td>{{ $produk->harga_produk }}</td>
        <td>{{ $produk->stock_produk }}</td>
        <td>{{ $produk->kategori->nama_kategori }}</td>
        <td>
            <a href="{{ route('produks.show',$produk->id) }}" class="text-blue-500">Lihat</a>
            <a href="{{ route('produks.edit',$produk->id) }}" class="text-yellow-500 ml-2">Edit</a>
            <form action="{{ route('produks.destroy',$produk->id) }}" method="POST" class="inline">
                @csrf @method('DELETE')
                <button type="submit" class="text-red-500 ml-2">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
