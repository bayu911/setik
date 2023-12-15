@extends('layouts/index')

@section('content')
<div class="col-lg-8 col-xlg-9 col-md-7">
    <div class="card">
        <div class="card-body">
            <form class="form-horizontal form-material mx-2">
                <div class="form-group">
                    <label class="col-md-12">Hari</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="masukan hari"
                            class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-email" class="col-md-12">Waktu</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="masukan waktu"
                            class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Absensi</label>
                    <div class="col-sm-12">
                        <select class="form-select shadow-none form-control-line">
                            <option>Hadir</option>
                            <option>Tidak</option>
                        </select>
                    </div>
                </div>     
            </form>
        </div>
    </div>
</div>
<a class="btn btn-success text-white"href="{{ url('admin') }}">simpan</a>
@endsection