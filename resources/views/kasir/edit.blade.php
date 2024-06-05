@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Kasir') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('kasir.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('kasir.update', $kasir->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nama Kasir</label>
                            <input type="text" class="form-control @error('nama_kasir') is-invalid @enderror" name="nama_kasir"
                                value="{{ old('nama_kasir') }}" placeholder="Barang" required>
                            @error('nama_kasir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control @error('jk') is-invalid @enderror" name="jk"
                                value="{{ old('jk') }}" placeholder="Jenis Kelamin" required>
                            @error('jk')
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
</div>
@endsection