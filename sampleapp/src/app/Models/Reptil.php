<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reptil extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang terkait dengan model
    protected $table = 'reptils';

    // Menentukan kolom mana yang bisa diisi secara massal (mass assignable)
    protected $fillable = [
        'type',       // Jenis reptil (misalnya, ular, kadal, kura-kura)
        'species',    // Spesies reptil
        'size',       // Ukuran reptil
        'price',      // Harga reptil
        'description',// Deskripsi produk
    ];

    // Menentukan kolom yang harus diperlakukan sebagai tanggal otomatis
    protected $dates = ['created_at', 'updated_at'];

    // Jika Anda ingin menambahkan relasi dengan model lain, misalnya untuk relasi dengan model 'Order'
    // public function orders()
    // {
    //     return $this->hasMany(Order::class);
    // }
}
