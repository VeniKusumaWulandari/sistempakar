<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Gejala;


class PenyakitDetail extends Model
{
    protected $table = 'penyakit_detail';
    protected $primaryKey = 'detail_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini
    protected $fillable = [
        'kode_detail',
        'kode_penyakit',
        'kode_gejala',
    ];
     public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'kode_gejala','kode_gejala');
    }

}
