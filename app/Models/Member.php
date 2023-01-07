<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'user_id',
        'level',
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function transaksi(){
        return $this->belongsTo(Transaksi::class);
    }
}
