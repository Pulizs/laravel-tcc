<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    
    protected $table = "professores";
    
    protected $fillable = [
        'nome',
        'cpf',
        'dataNascimento',
        'email',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function lotacao()
    {
        return $this->hasOne(Lotacao::class);
    }
    
    public function disciplinas(){
        return $this->hasMany(Disciplina::class);
    }
}
