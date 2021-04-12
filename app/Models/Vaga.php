<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    protected $fillable = [    
    'titulo',
    'area',
    'beneficios',       
    'descricao',
    'empresa',
    'local',
    'jornada_semanal',        
    'regime_trabalho',  
    'salario_mensal',          
    'perfil_candidato', 
    'cursos',
    'contato',     
    'email',
    'tel',     
    'site',
    ];




    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }


}
