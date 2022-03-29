<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekaman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pasien() {
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }

    public function dokter() {
        return $this->belongsTo(Dokter::class, 'dokter_id');
    }
}
