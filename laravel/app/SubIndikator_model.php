<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubIndikator_model extends Model
{
    protected $table = 't_m_subindikator';
    protected $primaryKey='id_m_subindikator';
    protected $fillable = ['subindikator',
                            'waktu_pengambilan',  
                            'fk_id_goal',
                            'fk_id_indikator',
                            'fk_id_m_sumberdata',



];
public function goal(){
    return $this->belongsTo(Goals_model::class,'fk_id_goal','id_goal');
}
public function indikator(){
    return $this->belongsTo(Indikator_model::class,'fk_id_indikator','id_indikator');
}
public function sumberdata(){
    return $this->belongsTo(Sumberdata_model::class,'fk_id_m_sumberdata','id_m_sumberdata');
}

public function getFacingsAttribute()
{
  return explode(',', $this->waktu_pengambilan);//gakguna ini sebernernya ehhe
}

}
