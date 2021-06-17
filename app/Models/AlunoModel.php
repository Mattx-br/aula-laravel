<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class AlunoModel extends Model
{
    protected $table = 'aluno';
    protected $fillable=['nome','idade','curso','bolsa', 'created_at'];
    use HasFactory; 
} 
