<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class History extends Model
{
    protected $table = 'history';
    protected $primaryKey = 'history_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

}
