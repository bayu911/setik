<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musik;

class MusikController extends Controller
{
    public function index()
    {
        $data = Musik::all();
        return view('musik.musik', compact('data'));
    }

    public function create()
    {
        return view('musik.create');
    }

    public function store(Request $request)
    {
        Musik::create([
            'list_musik' => $request->list_musik,
        ]);
        
        return redirect()->route('musik.index');
    }

    public function edit(Request $request, $id)
    {
        $data = Musik::findOrFail($id);

        return view('musik.edit', compact('data', 'id'));
    }

    public function update(Request $request, $id)
    {
        $data = Musik::findOrFail($id);
        $data->update([
            'list_musik' => $request->list_musik,
        ]);

        return redirect()->route('musik.index');
    }

    public function destroy($id)
    {
        $data = Musik::findOrFail($id);
        $data->delete();

        return redirect()->route('musik.index');
    }
}
