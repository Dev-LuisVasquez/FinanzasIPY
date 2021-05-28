<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class total_almacenado extends Model
{
    use HasFactory;
    protected $table = 'detalle_documento';
    public $timestamps = false;
    protected $primaryKey = 'Cantidad';
}
