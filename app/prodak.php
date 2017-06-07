<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prodak extends Model
{
     protected $table ='prodak';
    protected $fillable = ['nama_prodak','harga','diskon'];
    protected $visible = ['nama_prodak','harga','diskon'];
    public $timestamps = true;
}
