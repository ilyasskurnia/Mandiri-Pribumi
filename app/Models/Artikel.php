<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table = 'artikel';
    protected $fillable = ['jenis_artikel', 'author', 'title', 'content', 'thumbnail'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'jenis_artikel', 'jenis_artikel');
    }
}
