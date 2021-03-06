<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtividadeAluno extends Model
{
    use HasFactory;

    protected $table = 'atividade_alunos';

    protected $fillable = ['horas_aprovadas', 'quantidade_horas', 'status', 'anexo', 'aluno_id', 'tipo_atividade_id'];

    public function tipo()
    {
        return $this->hasOne(TipoAtividade::class, 'id', 'tipo_atividade_id');
    }

    public function aluno()
    {
        return $this->hasOne(Aluno::class, 'id', 'aluno_id');
        //return $this->belongsToMany(ModelTurmas::class)->using(ModelCursosIntegrantesTurma::class);
    }
}
