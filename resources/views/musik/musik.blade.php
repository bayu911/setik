@extends('layouts/index')

@section('content')
<h1 class="mb-4 fw-bold">Musik</h1>
<a class="btn btn-success text-white mb-4" href="{{ route('musik.create') }}">Tambah Musik</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>List Musik</th>
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
                <td>{{ $item->list_musik }}</td>
                <td>
                    <a href="{{ route('musik.edit', $item->id_musik) }}" class="btn btn-warning">Edit</a>
                    <span class="mx-2"></span>
                    <form action="{{ route('musik.destroy', $item->id_musik) }}" method="post" class="d-inline">
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