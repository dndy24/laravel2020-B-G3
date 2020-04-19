<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perlengkapan extends Model
{
    protected $table = 'perlengkapans';
	protected $fillable = ['surat_ijin','p3k','navigasi'];

	public function regu(){
		return $this->belongsTo("App\Regu", "regu_id");
	}
}
