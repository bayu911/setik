<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iklan;

class IklanController extends Controller
{
    public function index()
    {
        $data = Iklan::all();
        return view('iklan.iklan', compact('data'));
    }

    public function create()
    {
        return view('iklan.create');
    }

    public function store(Request $request)
    {
        Iklan::create([
            'produk' => $request->produk,
            'jumlah_iklan' => $request->jumlah_iklan,
        ]);
        
        return redirect()->route('iklan.index');
    }

    public function edit(Request $request, $id)
    {
        $data = Iklan::findOrFail($id);

        return view('iklan.edit', compact('data', 'id'));
    }

    public function update(Request $request, $id)
    {
        $data = Iklan::findOrFail($id);
        $data->update([
            'produk' => $request->produk,
            'jumlah_iklan' => $request->jumlah_iklan,
        ]);

        return redirect()->route('iklan.index');
    }

    public function destroy($id)
    {
        $data = Iklan::findOrFail($id);
        $data->delete();

        return redirect()->route('iklan.index');
    }
}
