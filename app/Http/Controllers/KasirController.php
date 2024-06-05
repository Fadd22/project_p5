<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{

    public function index()
    {
        $kasir = Kasir::latest()->paginate(5);
        return view('kasir.index', compact('kasir'));
    }

    public function create()
    {
        return view('kasir.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_kasir' => 'required|min:5',
            'jk' => 'required',
        ]);

        $kasir = new Kasir();
        $kasir->nama_kasir = $request->nama_kasir;
        $kasir->jk = $request->jk;
        // save
        $kasir->save();
        return redirect()->route('kasir.index');
    }

    public function show($id)
    {
        $kasir = Kasir::findOrFail($id);
        return view('kasir.show', compact('kasir'));
    }

    public function edit($id)
    {
        $kasir = Kasir::findOrFail($id);
        return view('kasir.edit', compact('kasir'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kasir' => 'required|min:5',
            'jk' => 'required',
        ]);

        $kasir = Kasir::findOrFail($id);
        $kasir->nama_kasir = $request->nama_kasir;
        $kasir->jk = $request->jk;

        // save
       
        $kasir->save();
        return redirect()->route('kasir.index');

    }

    public function destroy($id)
    {
        $kasir = Kasir::findOrFail($id);
        $kasir->delete();
        return redirect()->route('kasir.index');

    }
}