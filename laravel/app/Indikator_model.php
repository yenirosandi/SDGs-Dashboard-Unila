<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indikator_model extends Model
{
    protected $table = 't_m_indikator';
    protected $primaryKey='id_indikator';
    protected $fillable = ['indikator',
                            'fk_id_goal',
];
    public $timestamps=true;

}
