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
<<<<<<< HEAD
<<<<<<< HEAD

	public function perlengkapan(){
    	return $this->hasMany("App\Perlengkapan");
    }
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
}
