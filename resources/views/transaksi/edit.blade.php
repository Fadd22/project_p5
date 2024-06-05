<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Transaksi') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nama Pembeli</label>
                            <input type="text" class="form-control @error('nama_pembeli') is-invalid @enderror" name="nama_pembeli"
                                value="{{ old('nama_pembeli') }}" placeholder="Pembeli" required>
                            @error('nama_pembeli')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Nama barang</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="jk"
                                value="{{ old('nama_barang') }}" placeholder="nama_barang" required>
                            @error('nama_barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama kasir</label>
                            <input type="text" class="form-control @error('nama_kasir') is-invalid @enderror" name="jk"
                                value="{{ old('nama_kasir') }}" placeholder="nama_kasir" required>
                            @error('nama_kasir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Total barang</label>
                            <input type="text" class="form-control @error('total_harga') is-invalid @enderror" name="total_harga"
                                value="{{ old('total_harga') }}" placeholder="Total barang" required>
                            @error('total_harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Total bayar</label>
                            <input class="form-control" class="form-control @error('total_bayar') is-invalid @enderror"
                                name="total_bayar" value="{{ old('total_bayar') }}" placeholder="Total bayar"
                                required>
                            @error('total_bayar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-sm btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection -->