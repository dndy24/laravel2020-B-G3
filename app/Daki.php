<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daki extends Model
{
   protected $fillable = [
        'nama', 'alamat', 'regu_id', 'operator_id', 'tanggal_mendaki'
    ];
}
