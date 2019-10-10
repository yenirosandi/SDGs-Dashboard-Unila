<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trend_model extends Model
{
    protected $table = 't_trend';
    protected $primaryKey='id_trend';
    protected $fillable = ['simbol_trend',

];
}
