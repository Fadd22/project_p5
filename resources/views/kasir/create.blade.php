@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                      <h4>{{ __('Kasir') }}</h4>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('kasir.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('kasir.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama kasir</label>
                            <input type="text" class="form-control @error('nama_kasir') is-invalid @enderror" name="nama_kasir"
                                value="{{ old('nama_kasir') }}" placeholder="Nama Kasir" required>
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

                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-warning">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection