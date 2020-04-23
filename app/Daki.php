<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daki extends Model
{
    protected $table = 'dakis';
	protected $fillable = ['nama', 'alamat', 'tanggal_mendaki'];

	public function regu(){
		return $this->belongsTo("App\Regu", "regu_id");
	}
}
