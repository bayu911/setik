@extends('layouts/index')

@section('content')
<h1 class="mb-4 fw-bold">Tambah Jadwal</h1>
<form action="{{ route('jadwal.store') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="">Hari</label>
        <select name="hari" class="form-control">
            <option value="senin">senin</option>
            <option value="selasa">selasa</option>
            <option value="rabu">rabu</option>
            <option value="kamis">kamis</option>
            <option value="jumat">jumat</option>
            <option value="sabtu">sabtu</option>
            <option value="minggu">minggu</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Waktu</label>
        <input type="date" name="waktu" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Penyiar</label>
        <select name="id_penyiar" class="form-control">
            @foreach ($penyiar as $item)
                <option value="{{ $item->id_penyiar }}">{{ $item->username }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection