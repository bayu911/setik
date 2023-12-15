<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Admin;
use App\Models\Penyiar;
use Auth;

class JadwalController extends Controller
{
    public function index()
    {
        $data = Jadwal::with(['admin', 'penyiar'])->get();
        return view('jadwal.jadwal', compact('data'));
    }

    public function create()
    {
        $penyiar = Penyiar::all();

        return view('jadwal.create', compact('penyiar'));
    }

    public function store(Request $request)
    {
        Jadwal::create([
            'hari' => $request->hari,
            'waktu' => $request->waktu,
            'id_admin' => Auth::user()->id_admin,
            'id_penyiar' => $request->id_penyiar,
        ]);
        
        return redirect()->route('jadwal.index');
    }

    public function edit(Request $request, $id)
    {
        $penyiar = Penyiar::all();

        $data = Jadwal::findOrFail($id);

        return view('jadwal.edit', compact('id', 'data', 'penyiar'));
    }

    public function update(Request $request, $id)
    {
        $data = Jadwal::findOrFail($id);
        $data->update([
            'hari' => $request->hari,
            'waktu' => $request->waktu,
            'id_admin' => Auth::user()->id_admin,
            'id_penyiar' => $request->id_penyiar,
            'absensi' => $request->absensi,
        ]);

        return redirect()->route('jadwal.index');
    }

    public function destroy($id)
    {
        $data = Jadwal::findOrFail($id);
        $data->delete();

        return redirect()->route('jadwal.index');
    }
}
