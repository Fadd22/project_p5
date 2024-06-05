@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Pembeli') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('pembeli.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama_pembeli') is-invalid @enderror" name="nama_pembeli"
                                value="{{ old('nama_pembeli') }}" placeholder="Pembeli" required>
                            @error('nama_pembeli')
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