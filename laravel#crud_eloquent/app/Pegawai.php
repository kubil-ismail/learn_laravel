<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //Table
    protected $table = "pegawai";
    
    //Mass Asignment
    protected $fillable = ['nama','alamat'];
}
