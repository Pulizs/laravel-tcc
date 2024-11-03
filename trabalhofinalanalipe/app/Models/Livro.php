<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    
    protected $table = "livros";

    protected $fillable = [
        "titulo",
        "resenha",
        "tipo",
        "autor",
        "publicacao"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
