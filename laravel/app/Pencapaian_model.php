<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pencapaian_model extends Model
{
    protected $table = 't_pencapaian';
    protected $primaryKey='id_pencapaian';
    protected $fillable = ['tahun',
                            'fk_id_goal',
                            'fk_id_indikator',
                            'fk_id_m_subindikator',
                            'fk_id_trend',
                            'nilai',
                            'keterangan',
                            'berkas'

                            ];
    public $timestamps=true;
    
    public function goal(){
        return $this->belongsTo(Goals_model::class,'fk_id_goal','id_goal');
    }
    public function indikator(){
        return $this->belongsTo(Indikator_model::class,'fk_id_indikator','id_indikator');
    }
    public function subindikator(){
        return $this->belongsToMany(SubIndikator_model::class,'fk_id_m_subindikator','id_m_subindikator')->withPivot(['nilai'])->withTimestamps();

    }
    public function trend(){
        return $this->belongsTo(Trend_model::class,'fk_id_trend','id_trend');
    }




}
