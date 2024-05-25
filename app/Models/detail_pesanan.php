<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pesanan extends Model
{
    use HasFactory;
    protected $table = 'tb_detail_pesanan';
    protected $primaryKey = 'id_detailpesanan';
    protected $guarded = ['id_detailpesanan'];
}
