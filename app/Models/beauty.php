<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beauty extends Model
{
    use HasFactory;
    protected $fillable = ['nama','harga','foto'];
    protected $table ='beauty';
}
