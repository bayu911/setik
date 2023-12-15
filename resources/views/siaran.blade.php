@extends('layouts/index')

@section('content')

    <a class="btn btn-success text-white"href="{{ url('tambahSiaran') }}">Tambah Siaran</a>
    <table>
        <table class="table">
            <thead>
                <tr>
                    <th>Senin</th>
                    <th>Selasa</th>
                    <th>Rabu</th>
                    <th>Kamis</th>
                    <th>Jumat</th>
                    <th>Sabtu</th>
                    <th>Minggu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>06.00 - 10.00</td>
                </tr>
                <tr>
                    <td>10.00 - 15.00</td>
                </tr>
            </tbody>
    </table>
  
@endsection