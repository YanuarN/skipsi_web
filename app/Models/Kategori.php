<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori',
    ];

    protected $primaryKey = 'idKategori';

    public function hewans(){
        return $this->belongsToMany(Hewan::class);
    }

}
