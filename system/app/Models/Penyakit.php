<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Penyakit extends Model
{
    protected $table = 'penyakit';
    protected $primaryKey = 'penyakit_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

}
