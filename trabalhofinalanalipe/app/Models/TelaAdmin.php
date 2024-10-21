<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelaAdmin extends Model
{
    use HasFactory;
    
    protected $table = "telaAdmin";

    protected $fillable = [
        "titulo",
        "conteudo",
        "imagem",
        "curtidas",
    ];

    

}
