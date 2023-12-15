<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyiar;

class PenyiarController extends Controller
{
    public function index()
    {
        $data = Penyiar::all();
        return view('penyiar.penyiar', compact('data'));
    }

    public function create()
    {
        return view('penyiar.create');
    }

    public function store(Request $request)
    {
        Penyiar::create([
            'username' => $request->username,
            'password' => bcrypt($request ->password),
        ]);
        
        return redirect()->route('penyiar.index');
    }

    public function edit(Request $request, $id)
    {
        $data = Penyiar::findOrFail($id);

        return view('penyiar.edit', compact('data', 'id'));
    }

    public function update(Request $request, $id)
    {
        $data = Penyiar::findOrFail($id);
        $data->update([
            'username' => $request->username,
            'password' => $request->filled('password') ? bcrypt($request->password) : $data->password,
        ]);

        return redirect()->route('penyiar.index');
    }

    public function destroy($id)
    {
        $data = Penyiar::findOrFail($id);
        $data->delete();

        return redirect()->route('penyiar.index');
    }
}
