<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function guruagenda(){
        return $this->hasMany(Agenda::class);
    }

    public function gurukelas(){
        return $this->hasOne(Kelas::class);
    }

    public function gurumapel(){
        return $this->belongsTo(Mapel::class, 'mapel_id', 'id');
    }

    public function guruuser(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    // protected $table = 'gurus';
}
