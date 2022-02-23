<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obatresep extends Model
{
    use HasFactory;
    protected $fillable = ['nama','no_hp','foto'];
    protected $table ='obat_resep';
}
