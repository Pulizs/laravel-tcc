<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    use HasFactory;
    
    protected $table = "postagem";

    protected $fillable = [
        "titulo",
        "conteudo",
        "image",
        "curtidas",
    ];

    public function images()
    {
        return $this->hasMany(Image::class, 'postagem_id', 'id');
    }


    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
