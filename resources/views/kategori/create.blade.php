@extends('layout.app')

@section('content')
<h2 class="text-xl mb-4">Tambah Kategori</h2>

<form action="{{ route('kategoris.store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label>Nama Kategori:</label>
        <input type="text" name="nama_kategori" class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection
