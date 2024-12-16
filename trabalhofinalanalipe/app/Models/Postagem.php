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
        "images",
        "curtidas",
    ];

    protected $casts = [
        'images' => 'array', // Converte JSON para array automaticamente
    ];
    
    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
