<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = 'penyakit';
    protected $guarded = ['id'];
    
    public function obat()
    {
        return $this->belongsToMany(Obat::class, 'penyakit_obat', 'penyakit_id', 'obat_id');
    }
}


