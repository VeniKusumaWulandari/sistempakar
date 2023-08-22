<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Gejala extends Model
{
    protected $table = 'gejala';
    protected $primaryKey = 'gejala_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

}
