<?php

namespace App\Http\Controllers;

use App\Models\AtividadeAluno;
use App\Models\Aluno;
use App\Models\Modalidade;
use App\Models\TipoAtividade;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function index()
    {
        
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function novaAtividade()
    {
        $tiposAtividades = TipoAtividade::all();
        $modalidades = Modalidade::all();
        return view('aluno/enviarAtividade', ['tipos' => $tiposAtividades, 'modalidades' => $modalidades]);
    }

    public function verAtividade()
    {
        $aluno = Aluno::where('pessoa_fisica_id', '=', session('User')->id)->first();
        $atividades = AtividadeAluno::where('aluno_id', $aluno->id)->get();
        return view('aluno/verAtividade', ['atividades' => $atividades]);
    }
}
