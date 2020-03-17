<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goals_model extends Model
{
    protected $table = 't_goals';
    protected $primaryKey='id_goal';
    protected $fillable = ['nama_goal',
                            'deskripsi_goal',
                            'gambar', 'icon'
];
public $incrementing = false;

public function indikator(){
    return $this->hasMany(Indikator_model::class);
}

public function subindikator(){
    return $this->hasMany(SubIndikator_model::class);
}

public function pencapaian(){
    return $this->hasMany(Pencapaian_model::class);
}

}

