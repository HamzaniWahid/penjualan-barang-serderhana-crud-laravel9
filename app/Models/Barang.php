<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jumlah',
        'harga',
        'ket',
    ];

    public function detail(){
        return $this->belongsTo(Detail::class);
    }
}
