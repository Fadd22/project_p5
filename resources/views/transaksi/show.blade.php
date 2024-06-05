@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                       <h4>{{ __('Hasil') }}</h4>
                    </div>
                
                    <div class="float-end">
                        <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    
                    <h4>{{ $transaksi->nama_transaksi }}</h4>
                    <h4>Barang : {{ $transaksi->total_harga }}</h4>
                    <h4>Harga Yang Harus Dibayar : {{ $transaksi->total_bayar }}</h4>

                    <p class="tmt-3">
                        {!! $transaksi->deskripsi !!}
                    </p>

                </div>
            </div>
            </div>
        </div>
    </div>
@endsection