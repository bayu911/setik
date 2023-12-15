@extends('layouts/index')

@section('content')
<h1 class="mb-4 fw-bold">Siaran</h1>
<a class="btn btn-success text-white mb-4" href="{{ route('siaran.create') }}">Tambah Siaran</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Pembahasan</th>
            <th>Iklan</th>
            <th>Musik</th>
            <th>Jadwal</th>
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
                <td>{{ $item->pembahasan }}</td>
                <td>{{ $item->iklan->produk }}</td>
                <td>{{ $item->musik->list_musik }}</td>
                <td>{{ $item->jadwal->hari }}</td>
                <td>
                    <a href="{{ route('siaran.edit', $item->id_siaran) }}" class="btn btn-warning">Edit</a>
                    <span class="mx-2"></span>
                    <form action="{{ route('siaran.destroy', $item->id_siaran) }}" method="post" class="d-inline">
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