<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $table = 'tb_pesanan';
    protected $primaryKey = 'id_pesanan';
    protected $guarded = ['id_pesanan'];

    public function pelanggan(){
        return $this->belongsTo(pelanggan::class,'id_pelanggan');
    }
}
