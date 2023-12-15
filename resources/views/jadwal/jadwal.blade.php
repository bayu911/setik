@extends('layouts/index')

@section('content')
<h1 class="mb-4 fw-bold">Jadwal</h1>
<a class="btn btn-success text-white mb-4" href="{{ route('jadwal.create') }}">Tambah Jadwal</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Hari</th>
            <th>Waktu</th>
            <th>Admin</th>
            <th>Penyiar</th>
            <th>Absensi</th>
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
                <td>{{ $item->hari }}</td>
                <td>{{ $item->waktu }}</td>
                <td>{{ $item->admin->username }}</td>
                <td>{{ $item->penyiar->username }}</td>
                <td>{{ $item->absensi }}</td>
                <td>
                    <a href="{{ route('jadwal.edit', $item->id_jadwal) }}" class="btn btn-warning">Edit</a>
                    <span class="mx-2"></span>
                    <form action="{{ route('jadwal.destroy', $item->id_jadwal) }}" method="post" class="d-inline">
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