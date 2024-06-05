<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Pembeli;
use App\Models\Barang;
use App\Models\Kasir;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{

    public function index()
    {
        $pembeli = Pembeli::all();
        $barang = Barang::all();
        $kasir = Kasir::all();

        $transaksi = Transaksi::with('barang', 'pembeli', 'kasir',)->latest()->paginate(5);
        
        return view('transaksi.index', compact('transaksi', 'pembeli', 'barang', 'kasir'));
    }

    public function create()
    {

        $pembeli = Pembeli::all();
        $barang = Barang::all();
        $kasir = Kasir::all();

        return view('transaksi.create', compact( 'pembeli', 'barang', 'kasir'));
    }

    public function store(Request $request)
    {
        //  $this->validate($request, [
        //     'id_pembeli' => 'required',
        //      'id_barang' => 'required',
        //      'id_kasir' => 'required',
        //      'total_barang' => 'required',
        //      'total_harga' => 'required',

        //  ]);

        $transaksi = new transaksi();
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->id_kasir = $request->id_kasir;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->total_bayar = $request->total_harga * $request->total_bayar;
        // save
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
          $this->validate($request, [
              'id_pembeli' => 'required',
              'id_barang' => 'required',
              'id_kasir' => 'required',
              'total_harga' => 'required',
              'total_bayar' => 'required',

          ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->id_kasir = $request->id_kasir;
        $transaksi->total_harga = $request->harga * $request->total_harga;
        $transaksi->total_bayar = $request->total_bayar;
        // save
        $transaksi->save();
        return redirect()->route('transaksi.index');

    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index');

    }
}