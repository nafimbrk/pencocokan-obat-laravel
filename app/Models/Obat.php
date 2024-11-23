<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat';
    protected $guarded = ['id'];
    
    public function penyakit()
    {
        return $this->belongsToMany(Penyakit::class, 'penyakit_obat', 'obat_id', 'penyakit_id');
    }
}





