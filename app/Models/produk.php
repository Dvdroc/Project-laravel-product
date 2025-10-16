<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $fillable = [
        'nama_produk',
        'harga_produk',
        'stock_produk',
        'kategori_id',
    ];
    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}
