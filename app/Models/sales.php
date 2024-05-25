<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    use HasFactory;
    protected $table = 'tb_sales';
    protected $primaryKey = 'id_sales';
    protected $guarded = ['id_sales'];
}
