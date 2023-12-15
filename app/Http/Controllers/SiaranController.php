<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siaran;
use App\Models\Iklan;
use App\Models\Jadwal;
use App\Models\Musik;

class SiaranController extends Controller
{
    public function index()
    {
        $data = Siaran::with(['jadwal', 'iklan', 'musik'])->get();
        return view('siaran.siaran', compact('data'));
    }

    public function create()
    {
        $iklan = Iklan::all();
        $jadwal = Jadwal::all();
        $musik = Musik::all();

        return view('siaran.create', compact('iklan', 'jadwal', 'musik'));
    }

    public function store(Request $request)
    {
        Siaran::create([
            'pembahasan' => $request->pembahasan,
            'id_iklan' => $request->id_iklan,
            'id_jadwal' => $request->id_jadwal,
            'id_musik' => $request->id_musik,
        ]);
        
        return redirect()->route('siaran.index');
    }

    public function edit(Request $request, $id)
    {
        $iklan = Iklan::all();
        $jadwal = Jadwal::all();
        $musik = Musik::all();

        $data = Siaran::findOrFail($id);

        return view('siaran.edit', compact('id', 'data', 'iklan', 'jadwal', 'musik'));
    }

    public function update(Request $request, $id)
    {
        $data = Siaran::findOrFail($id);
        $data->update([
            'pembahasan' => $request->pembahasan,
            'id_iklan' => $request->id_iklan,
            'id_jadwal' => $request->id_jadwal,
            'id_musik' => $request->id_musik,
        ]);

        return redirect()->route('siaran.index');
    }

    public function destroy($id)
    {
        $data = Siaran::findOrFail($id);
        $data->delete();

        return redirect()->route('siaran.index');
    }
}
