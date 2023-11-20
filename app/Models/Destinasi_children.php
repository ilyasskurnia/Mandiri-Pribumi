<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi_children extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'destinasi_children';
    protected $fillable = ['days', 'detail_rute', 'deskripsi','thumbnail'];

    public function destinasi () 
    {
        return $this->belongsTo(Destinasi::class, 'destinasi_id');
    }
}
