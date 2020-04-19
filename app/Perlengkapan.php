<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perlengkapan extends Model
{
    protected $table = 'perlengkapans';
	protected $fillable = ['surat_ijin','p3k','navigasi'];
<<<<<<< HEAD
<<<<<<< HEAD

	public function regu(){
		return $this->belongsTo("App\Regu", "regu_id");
	}
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
=======
>>>>>>> 076c146e75df2ec8bd095da480c8dfe497067053
}
