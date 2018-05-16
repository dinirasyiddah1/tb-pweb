<?php

namespace App;
use App\JenjangPendidikan;
use App\Penduduk;
use Illuminate\Database\Eloquent\Model;

class PendidikanPenduduk extends Model
{
    protected $table = 'pendidikan_penduduk';

    protected $fillable = ['jenjang_id', 'penduduk_id', 'nama_institusi', 'tahun_mulai', 'tahun_selesai'];

    public function penduduk(){
    	return $this->belongsTo('App\Penduduk','penduduk_id','id');
    }

    public function jenjang_pendidikan(){
    	return $this->belongsTo('App\JenjangPendidikan','jenjang_id','id');
    }
}
