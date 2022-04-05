<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $guarded = ['id'];

    public function penyidik()
    {
        return $this->belongsTo(Penyidik::class, 'penyidik_id');
    }

    public function pengadu()
    {
        return $this->belongsTo(Pengadu::class, 'pengadu_id');
    }

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'perusahaan_id');
    }

    public function pengawas()
    {
        return $this->belongsTo(Pengawas::class, 'pengawas_id');
    }
}
