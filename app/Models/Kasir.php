<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kasir', 'jk'];
    protected $visible = ['nama_kasir', 'jk'];

    public function Kasir()
    {
        return $this->hasMany(Kasir::class, 'id_kasir');
    }
}
