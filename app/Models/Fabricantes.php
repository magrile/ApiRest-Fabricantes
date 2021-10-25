<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricantes extends Model
{
    use HasFactory;
    protected $fillable = [
        'marca',
        'plantas',
        'paisesDistribuidos',
        'beneficioBruto',
        'beneficoNeto',
        'deuda',
        'cif'
    ];
}
