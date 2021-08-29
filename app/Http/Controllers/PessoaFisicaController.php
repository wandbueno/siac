<?php

namespace App\Http\Controllers;

use App\Models\PessoaFisica;
use Illuminate\Http\Request;

class PessoaFisicaController extends Controller
{
    
    public function index()
    {
        $pessoas = PessoaFisica::all();
        return view('adm/listaPessoas', ['pessoas' => $pessoas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm/cadastroPessoas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required', 
            'cpf' => 'required',
            'data_nascimento' => 'required',
            'sexo' => 'required',            
            'password' => 'required',
            
        ]);

        $pessoa = new PessoaFisica();

        $pessoa->nome = $request->nome;
        $pessoa->cpf = $request->cpf;
        $pessoa->data_nascimento = $request->data_nascimento;
        $pessoa->sexo = $request->sexo;
        $pessoa->email = $request->email;
        $pessoa->password = $request->password;

        $pessoa->save();

        if(!empty($pessoa->id)){
            return redirect()->route('pessoas.index')->with('status', 'Pessoa cadastrada com Sucesso!');
        }else{
            return redirect()->back()->with('status', 'Erro ao salvar Pessoa!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = PessoaFisica::where('id', $id)->first();
        return view('adm/cadastroPessoas', ['pessoa' => $pessoa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'data_nascimento' => 'required',
            'sexo' => 'required',            
            'password' => 'required',
        ]);

        $pessoa = PessoaFisica::where('id', $id)->first();

        $pessoa->nome = $request->nome;
        $pessoa->cpf = $request->cpf;
        $pessoa->data_nascimento = $request->data_nascimento;
        $pessoa->sexo = $request->sexo;
        $pessoa->email = $request->email;
        $pessoa->password = $request->password;

        $pessoa->save();

        return redirect()->route('pessoas.index')->with('status', 'Pessoa Atualizada com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = PessoaFisica::where('id', $id)->first();
        $pessoa->delete();

        return redirect()->route('pessoas.index')->with('status', 'pessoa Removida Com Sucesso.');
    }
}
