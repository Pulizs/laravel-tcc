<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duvida extends Model
{
    use HasFactory;
    
    protected $table = "duvidas";

    protected $fillable = [
        "titulo",
        "conteudo",
        "imagem",
        "curtidas",
    ];

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

}
