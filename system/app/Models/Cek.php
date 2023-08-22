<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Cek extends Model
{
    protected $table = 'cek';
    protected $primaryKey = 'cek_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

}
