@extends('layouts/index')

@section('content')
<h1 class="mb-4 fw-bold">Iklan</h1>
<a class="btn btn-success text-white mb-4" href="{{ route('iklan.create') }}">Tambah Iklan</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Jumlah Iklan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->produk }}</td>
                <td>{{ $item->jumlah_iklan }}</td>
                <td>
                    <a href="{{ route('iklan.edit', $item->id_iklan) }}" class="btn btn-warning">Edit</a>
                    <span class="mx-2"></span>
                    <form action="{{ route('iklan.destroy', $item->id_iklan) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection