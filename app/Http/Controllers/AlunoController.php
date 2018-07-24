<?php

namespace App\Http\Controllers;


use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;

class AlunoController extends Controller
{

    public function index()
    {
        $alunos = Aluno::orderBy('nome', 'asc')->paginate(10);
        return view('alunos.index',['alunos' => $alunos]);
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(AlunoRequest $request)
    {
        $aluno = new Aluno();
        $aluno->nome        = $request->nome;
        $aluno->matricula = $request->matricula;
        $aluno->endereco = $request->endereco;
        $aluno->bairro = $request->bairro;
        $aluno->cep = $request->cep;
        $aluno->email = $request->email;
        $aluno->data_entrada = $request->data_entrada;
        $aluno->save();
        return redirect()->route('alunos.index')->with('message', 'Aluno criado com sucesso!');
    }

}
