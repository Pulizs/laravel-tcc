<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lotacao extends Model
{
    use HasFactory;
    
    protected $table = "lotacoes";
    
    protected $fillable = [
        'nomeCampus',
        'departamento',
        'areaAtuacao',
    ];
}
