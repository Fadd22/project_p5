@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    <div class="float-start">
                        {{ __('Transaksi') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('transaksi.create') }}" class="btn btn-sm btn-outline-light">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pembeli</th>
                                    <th>Barang</th>
                                    <th>Kasir</th>
                                    <th>Total barang</th>
                                    <th>Total harga</th>  
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($transaksi as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->pembeli->nama_pembeli }}</td>
                                    <td>{{ $data->barang->nama_barang }}</td>
                                    <td>{{ $data->kasir->nama_kasir }}</td>
                                    <td>{{ $data->total_harga }}</td>
                                    <td>{{ $data->total_bayar }}</td>
                        
                                    <td>
                                        <form action="{{ route('transaksi.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('transaksi.show', $data->id) }}"
                                                class="btn btn-sm btn-outline-dark">Show</a> |
                                            <!-- <a href="{{ route('transaksi.edit', $data->id) }}" -->
                                                <!-- class="btn btn-sm btn-outline-success">Edit</a> | -->
                                            <button type="submit" onsubmit="return confirm('Are You Sure ?');"
                                                class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Data data belum Tersedia.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {!! $transaksi->withQueryString()->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection