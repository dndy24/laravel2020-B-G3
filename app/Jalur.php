<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jalur extends Model
{
    protected $table = 'jalurs';
    protected $fillable = ['nama', 'lokasi', 'estimasi', 'jumlah_pos', 'status'];

    public function regu(){
    	return $this->hasMany("App\Regu");
    }
}
