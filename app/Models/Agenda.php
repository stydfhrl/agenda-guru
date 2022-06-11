<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function agendaguru(){
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }

    public function agendakelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
}
