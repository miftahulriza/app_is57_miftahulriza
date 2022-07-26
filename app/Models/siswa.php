<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    public function kelas(){
        return $this->hasOne(Kelas::class,'id','kelas_id');
    }
}
