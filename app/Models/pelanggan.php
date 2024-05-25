<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    protected $table = 'tb_pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $guarded = ['id_pelanggan'];
}
