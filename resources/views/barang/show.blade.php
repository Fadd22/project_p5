@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    <div class="float-start">
                       <h4>{{ __('Produk') }}</h4>
                    </div>
                
                    <div class="float-end">
                        <a href="{{ route('barang.index') }}" class="btn btn-sm btn-outline-light">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <img src="{{ asset('storage/barangs/' . $barang->image) }}" class="w-25 rounded">
                    <hr>
                    <h4>Nama Makanan : {{ $barang->nama_barang }}</h4>
                    <h4>Harga Rp : {{ $barang->harga }}</h4>
                    <h4>Stok : {{ $barang->stok }}</h4>

                    <p class="tmt-3">
                        <h7>Deskripsi</h7> : {!! $barang->deskripsi !!}
                    </p>

                </div>
            </div>
            </div>
        </div>
    </div>
@endsection