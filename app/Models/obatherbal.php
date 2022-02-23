<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obatherbal extends Model
{
    use HasFactory;
    protected $fillable = ['nama','harga','foto'];
    protected $table ='obat_herbal';
}
