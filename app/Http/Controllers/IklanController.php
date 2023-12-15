<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IklanController extends Controller
{
    public function store(Request $request)
    {

        Post::create([
            'hari'          => $request ->hari,
            'waktu'         => $request ->waktu,
            'absensi'       => $request ->absensi,
            'id_admin'      => $request ->id_absensi,
            'íd_penyiar'    => $request ->id_penyiar,
            'id_siaran'     => $request ->id_siaran,
        ]);
        
    }
}
