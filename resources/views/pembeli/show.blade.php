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
                    <div class="card-body">
                    <hr>
                    <h4>Nama Pembeli : {{ $pembeli->nama_pembeli }}</h4>
                    <h4>Jenis Kelamin : {{ $pembeli->jk }}</h4>
                    <p class="tmt-3">
                        {!! $pembeli->deskripsi !!}
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection