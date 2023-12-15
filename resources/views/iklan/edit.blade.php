@extends('layouts/index')

@section('content')
<h1 class="mb-4 fw-bold">Tambah Iklan</h1>
<form action="{{ route('iklan.update', $id) }}" method="post">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="">Produk</label>
        <input type="text" name="produk" class="form-control" value="{{ $data->produk }}">
    </div>
    <div class="form-group">
        <label for="">Jumlah Iklan</label>
        <input type="number" name="jumlah_iklan" class="form-control" value="{{ $data->jumlah_iklan }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection