<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table ='siswa';

    protected $primarykey ='nisn';

    protected $fillable =[ 
        'nisn',
        'nis',
        'nama',
        'password',
        'id',
        'no_telp',
        'alamat',
        'id_spp'
    ];
    public function kelas() {
        return $this->belongsTo(Kelas::class, 'id');
    }
}
