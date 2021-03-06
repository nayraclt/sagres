<?php

namespace App\Http\Controllers;


use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function index()
    {
        $alunos = $this->listarAlunos();
        return view('alunos.index',['alunos' => $alunos]);
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        $dataEntrada = $this->FormataData($request->data_entrada);

        $aluno = new Aluno();
        $aluno->nome        = $request->nome;
        $aluno->matricula = $request->matricula;
        $aluno->endereco = $request->endereco;
        $aluno->bairro = $request->bairro;
        $aluno->cep = $request->cep;
        $aluno->email = $request->email;
        $aluno->data_entrada = $dataEntrada;
        $aluno->uf = $request->uf;
        $aluno->save();
        return redirect()->route('alunos.index')->with('message', 'Aluno criado com sucesso!');
    }


    private function FormataData($data){
        return date("Y-m-d H:i:s",strtotime($data));
    }

    private function listarAlunos(){
        return Aluno::orderBy('nome', 'asc')->paginate(10);
    }

    public function ListarAlunosJson(){
        $alunos = $this->listarAlunos();
        return response()->json($alunos);
    }
}
