<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{

    public function index()
    {
        $pembeli = Pembeli::latest()->paginate(5);
        return view('pembeli.index', compact('pembeli'));
    }

    public function create()
    {
        return view('pembeli.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_pembeli' => 'required|min:5',
            'jk' => 'required',
        ]);

        $pembeli = new Pembeli();
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->jk = $request->jk;
        // save
        $pembeli->save();
        return redirect()->route('pembeli.index');
    }

    public function show($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembeli'));
    }

    public function edit($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.edit', compact('pembeli'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_pembeli' => 'required|min:5',
            'jk' => 'required',
        ]);

        $pembeli = Pembeli::findOrFail($id);
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->jk = $request->jk;

        // save
       
        $pembeli->save();
        return redirect()->route('pembeli.index');

    }

    public function destroy($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();
        return redirect()->route('pembeli.index');

    }
}