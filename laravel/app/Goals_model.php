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


}

