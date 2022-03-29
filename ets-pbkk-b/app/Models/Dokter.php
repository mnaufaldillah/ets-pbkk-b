<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function rekamen() {
        return $this->hasMany(Rekaman::class);
    }
}
