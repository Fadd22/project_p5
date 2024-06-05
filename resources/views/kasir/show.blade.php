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
                        <a href="{{ route('kasir.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                    <div class="card-body">
                    <hr>
                    <h4>Nama kasir : {{ $kasir->nama_kasir }}</h4>
                    <h4>Jenis Kelamin : {{ $kasir->jk }}</h4>
                    <p class="tmt-3">
                        {!! $kasir->deskripsi !!}
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection