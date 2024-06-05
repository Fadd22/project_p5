<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Storage;

class BarangController extends Controller
{

    public function index()
    {
        $barang = Barang::latest()->paginate(5);
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        //validate form
         $this->validate($request, [
             'nama_barang' => 'required',
             'harga' => 'required',
             'stok' => 'required',
             'deskripsi' => 'required',
             'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
         ]);

        $barang = new Barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->deskripsi = $request->deskripsi;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/barangs', $image->hashName());
        $barang->image = $image->hashName();
        $barang->save();
        return redirect()->route('barang.index');
    }

    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->deskripsi = $request->deskripsi;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/barangs', $image->hashName());
        //delete old image
        Storage::delete('public/barangs/' . $barang->image);

        $barang->image = $image->hashName();
        $barang->save();
        return redirect()->route('barang.index');

    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        Storage::delete('public/barangs/' . $barang->image);
        $barang->delete();
        return redirect()->route('barang.index');

    }
}