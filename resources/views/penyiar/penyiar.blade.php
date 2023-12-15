@extends('layouts/index')

@section('content')
<h1 class="mb-4 fw-bold">Penyiar</h1>
<a class="btn btn-success text-white mb-4" href="{{ route('penyiar.create') }}">Tambah Penyiar</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
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
                <td>{{ $item->username }}</td>
                <td>
                    <a href="{{ route('penyiar.edit', $item->id_penyiar) }}" class="btn btn-warning">Edit</a>
                    <span class="mx-2"></span>
                    <form action="{{ route('penyiar.destroy', $item->id_penyiar) }}" method="post" class="d-inline">
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