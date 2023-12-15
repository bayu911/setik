@extends('layouts/index')

@section('content')
<h1 class="mb-4 fw-bold">Tambah Penyiar</h1>
<form action="{{ route('penyiar.store') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection