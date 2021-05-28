<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_documento extends Model
{
    use HasFactory;
    protected $table = 'detalle_documento';
    public $timestamps = false;
    protected $primaryKey = 'idDetalle_Documento';

}
