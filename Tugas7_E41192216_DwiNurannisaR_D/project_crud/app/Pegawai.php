<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "id";
    protected $fillable = [
      'id','nama', 'jabatan', 'tahun_masuk', 'tahun_keluar'];
}
