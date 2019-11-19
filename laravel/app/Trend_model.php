<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trend_model extends Model
{
    protected $table = 't_trends';
    protected $primaryKey='id_trend';
    protected $fillable = ['simbol_trend',
                           'keterangan','poin',

];
}
