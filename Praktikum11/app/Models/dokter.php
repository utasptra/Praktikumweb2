<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $dokter = "dokter"; 

    protected $filabel =[
        'kode',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'gender',
        'kategori',
        'email',
        'alamat',

    ] ;
}
