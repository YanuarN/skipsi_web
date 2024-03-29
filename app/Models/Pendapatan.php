<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_pendapatan',
        'nominal',
        'keterangan',
        'idAdmin',
    ];

    protected $primaryKey = 'idPendapatan';

    public function dikelola(){
        return $this->belongsToMany(Admin::class);
    }
}
