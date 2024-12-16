<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    
    protected $table = "eventos";

    protected $fillable = [
        "data", 
        "titulo",
        "palestrante" ,
        "conteudo",
        "images",
        "local",
    ];

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

}
