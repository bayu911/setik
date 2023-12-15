@extends('layouts/index')

@section('content')
<h1 class="mb-4 fw-bold">Tambah Siaran</h1>
<form action="{{ route('siaran.store') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="">Pembahasan</label>
        <input type="text" name="pembahasan" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Iklan</label>
        <select name="id_iklan" class="form-control">
            @foreach ($iklan as $item)
                <option value="{{ $item->id_iklan }}">{{ $item->produk }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Jadwal</label>
        <select name="id_jadwal" class="form-control">
            @foreach ($jadwal as $item)
                <option value="{{ $item->id_jadwal }}">{{ $item->hari }} ({{ $item->waktu }})</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Musik</label>
        <select name="id_musik" class="form-control">
            @foreach ($musik as $item)
                <option value="{{ $item->id_musik }}">{{ $item->list_musik }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection