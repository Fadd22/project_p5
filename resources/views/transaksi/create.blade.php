@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                      <h4>{{ __('Transaksi') }}</h4>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="id_pembeli">Nama Pembeli</label>
                            <select name="id_pembeli" class="form-control">
                                @foreach ($pembeli as $item)
                                <option value ="{{$item->id}}">{{$item->nama_pembeli}}</option>
                                 @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="id_barang">Nama Barang</label>
                            <select name="id_barang" class="form-control">
                                @foreach ($barang as $item)
                                <option value ="{{$item->id}}">{{$item->nama_barang}}</option>
                                 @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="id_kasir">Nama Kasir</label>
                            <select name="id_kasir" class="form-control">
                                @foreach ($kasir as $item)
                                <option value ="{{$item->id}}">{{$item->nama_kasir}}</option>
                                 @endforeach
                            </select>
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

                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-warning">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection