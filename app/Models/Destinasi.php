<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;
    protected $table = 'destinasi';
    protected $fillable = ['thumbnail', 'destinasi', 'peta_wisata', 'rute', 'brosure', 'total_waktu', 'biaya'];
}
