@extends('layouts/index')

@section('content')
<h1 class="mb-4 fw-bold">Tambah Musik</h1>
<form action="{{ route('musik.update', $id) }}" method="post">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="">List Musik</label>
        <input type="text" name="list_musik" class="form-control" value="{{ $data->list_musik }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection