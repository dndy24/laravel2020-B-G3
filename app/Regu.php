<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regu extends Model
{
    protected $table = 'regus';
	protected $fillable = ['regu', 'jumlah_anggota', 'jalur_id'];

	public function jalur(){
		return $this->belongsTo("App\Jalur", "jalur_id");
	}
}
