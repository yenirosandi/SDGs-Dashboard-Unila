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
        return $this->belongsToMany(SubIndikator_model::class,'fk_id_m_subindikator','id_m_subindikator');
    }
    public function trend(){
        return $this->belongsTo(Trend_model::class,'fk_id_trend','id_trend');
    }


    // public static function getJumlahDataPerSub(){
 
 
    // 	$tahun_awal = 2017;
    // 	$tahun_akhir = date('Y');
 
    // 	$category = [];
 
    // 	$series= DB::table('t_pencapaian')
    //     ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
    //     ->select('t_pencapaian.nilai','t_pencapaian.tahun','t_m_subindikator.subindikator', 't_m_subindikator.fk_id_indikator')
    //     ->where('t_pencapaian.fk_id_indikator', '=', $id_indi)
    //     ->groupBy('subindikator')
    //     ->get();
    	
 
 
    // 	$j = 0;
    // 	for ($i=$tahun_awal; $i <= $tahun_akhir ; $i++) { 
    // 		$category[] = $i;
 
    // 		$series[0]['data'][] = Self::where('jenis_tamu', '=', 'dalam negeri')->where('tgl_kunjungan','like', $i.'%')->count();
    // 		$series[1]['data'][] = Self::where('jenis_tamu', '=', 'luar negeri')->where('tgl_kunjungan','like', $i.'%')->count();
    		
    // 	}
 
 
    // 	return ['category' => $category, 'series' => $series];
 
 
    // }

}
