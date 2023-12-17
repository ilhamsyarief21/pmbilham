<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class datadiri extends Model
{
    use HasFactory;
    protected $table = 'datadiri_tabel';
    protected $fillable = [
        'nama_lengkap',
        'alamat_ktp',
        'alamat_lengkap_saat_ini',
        'kecamatan',
        'kabupaten',
        'propinsi_ktp',
        'nomor_telepon',
        'nomor_hp',
        'email',
        'kewarganegaraan',
        'tanggal_lahir',
        'tempat_lahir',
        'kota_kabupaten',
        'propinsi',
        'jenis_kelamin',
        'status_menikah',
        'agama',
    ];
    
}



