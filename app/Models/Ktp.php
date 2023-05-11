<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ktp extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'nik';
    protected $table = 'ktp';
    protected $fillable = [
        'nama',
        'nik',
        'tmplahir',
        'tgllahir',
        'jk',
        'darah',
        'alamat',
        'rt',
        'rw',
        'desa',
        'provinsi',
        'kecamatan',
        'agama',
        'status',
        'pekerjaan',
        'kewarganegaraan',
    ];
}
