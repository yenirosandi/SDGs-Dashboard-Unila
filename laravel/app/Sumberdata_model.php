<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sumberdata_model extends Model
{
    protected $table = 't_m_sumberdata';
    protected $primaryKey='id_m_sumberdata';
    protected $fillable = ['sumberdata',];

    public $timestamps=true;

}
