<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    //
    protected $table = "daftar";
    protected $fillable = ['nis', 'nama', 'jk', 'temp_lahir', 'tgl_lahir', 'alamat', 'asal_sekolah', 'kelas', 'jurusan'];
}
