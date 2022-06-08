<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agendas';
    protected $fillable = ['nama_guru', 'mapel', 'materi', 'darijam', 'sampaijam', 'absensi', 'nama_kelas', 'metode', 'link_belajar', 'screenshot', 'keterangan'];
}
