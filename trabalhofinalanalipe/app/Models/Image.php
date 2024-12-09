<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'image';

    protected $fillable = [
        'path',
        'postagem_id',
    ];

    public function postagem()
    {
        return $this->belongsTo(Postagem::class, 'postagem_id', 'id');
    }
}
