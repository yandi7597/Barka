<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemeriksaan extends Model
{
    use HasFactory;
    protected $fillable = ['nama_pasien','nama_dokter','tgl','hasil_pengujian','nama_obat','biaya','pajak','total_biaya'];
    protected $table ='pemeriksaan';
}
