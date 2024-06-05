<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id_pembeli', 'id_barang', 'id_kasir', 'total_harga', 'total_bayar'];
    protected $visible = ['id_pembeli', 'id_barang', 'id_kasir', 'total_harga', 'total_bayar'];

    public function Kasir()
    {
        return $this->belongsTo(Kasir::class, 'id_kasir');
    }
    public function Pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'id_pembeli');
    }
    public function Barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

}
