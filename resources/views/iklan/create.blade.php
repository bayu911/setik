@extends('layouts/index')

@section('content')
<h1 class="mb-4 fw-bold">Tambah Iklan</h1>
<form action="{{ route('iklan.store') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="">Produk</label>
        <input type="text" name="produk" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Jumlah Iklan</label>
        <input type="number" name="jumlah_iklan" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection