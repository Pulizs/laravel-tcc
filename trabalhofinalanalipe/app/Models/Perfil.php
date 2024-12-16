<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    
    protected $table = "perfil";

    protected $fillable = [
        "titulo",
        "conteudo",
        "curtidas",
    ];

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function postagem(){
        return $this->belongsTo(Postagem::class);
    }

}
