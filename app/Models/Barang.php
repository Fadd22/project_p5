<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'harga', 'stok', 'deskripsi', 'image'];
    protected $visible = ['nama', 'harga', 'stok', 'deskripsi', 'image'];

    public function Barang()
    {
        return $this->hasMany(Barang::class, 'id_barang');
    }
}
