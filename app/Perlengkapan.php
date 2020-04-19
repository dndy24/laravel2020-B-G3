<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perlengkapan extends Model
{
    protected $table = 'perlengkapans';
	protected $fillable = ['surat_ijin','p3k','navigasi'];
}
