@extends('layouts/index')

@section('content')
<h1 class="mb-4 fw-bold">Tambah Jadwal</h1>
<form action="{{ route('jadwal.update', $id) }}" method="post">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="">Hari</label>
        <select name="hari" class="form-control">
            <option {{ $data->hari == 'senin' ? 'selected' : '' }} value="senin">senin</option>
            <option {{ $data->hari == 'selasa' ? 'selected' : '' }} value="selasa">selasa</option>
            <option {{ $data->hari == 'rabu' ? 'selected' : '' }} value="rabu">rabu</option>
            <option {{ $data->hari == 'kamis' ? 'selected' : '' }} value="kamis">kamis</option>
            <option {{ $data->hari == 'jumat' ? 'selected' : '' }} value="jumat">jumat</option>
            <option {{ $data->hari == 'sabtu' ? 'selected' : '' }} value="sabtu">sabtu</option>
            <option {{ $data->hari == 'minggu' ? 'selected' : '' }} value="minggu">minggu</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Waktu</label>
        <input type="date" name="waktu" class="form-control" value="{{ $data->waktu }}">
    </div>
    <div class="form-group">
        <label for="">Penyiar</label>
        <select name="id_penyiar" class="form-control">
            @foreach ($penyiar as $item)
                <option value="{{ $item->id_penyiar }}" {{ $item->id_penyiar == $data->id_penyiar ? 'selected' : '' }}>{{ $item->username }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Absensi</label>
        <input type="text" name="absensi" class="form-control" value="{{ $data->absensi }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection