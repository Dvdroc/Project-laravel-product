@extends('layout.app')

@section('content')
<h2 class="text-xl mb-4">Edit Kategori</h2>

<form action="{{ route('kategoris.update', $kategori->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label>Nama Kategori:</label>
        <input type="text" name="nama_kategori" class="border p-2 w-full" value="{{ $kategori->nama_kategori }}" required>
    </div>
    <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
