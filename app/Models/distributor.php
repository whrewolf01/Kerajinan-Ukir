<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class distributor extends Model
{
    use HasFactory;
    protected $table = 'tb_distributor';
    protected $primaryKey = 'id_distributor';
    protected $guarded = ['id_distributor'];
}
