@extends('layout.app')

@section('content')
<h2 class="text-xl mb-4">Daftar Kategori</h2>
<a href="{{ route('kategoris.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Tambah Kategori</a>

<table class="table-auto w-full mt-4 border">
    <tr class="bg-gray-200">
        <th>Nama Kategori</th>
        <th>Aksi</th>
    </tr>
    @foreach($kategoris as $kategori)
    <tr>
        <td>{{ $kategori->nama_kategori }}</td>
        <td>
            <a href="{{ route('kategoris.edit',$kategori->id) }}" class="text-yellow-500">Edit</a>
            <form action="{{ route('kategoris.destroy',$kategori->id) }}" method="POST" class="inline">
                @csrf @method('DELETE')
                <button type="submit" class="text-red-500 ml-2">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
