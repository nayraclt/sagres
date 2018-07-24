<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        $disciplinas = Disciplina::orderBy('nome', 'asc')->paginate(10);
        return view('disciplinas.index',['disciplinas' => $disciplinas]);
    }

    public function create()
    {
        return view('disciplinas.create');
    }

    public function store(Request $request)
    {
        $disciplina = new Disciplina();
        $disciplina->nome        = $request->nome;
        $disciplina->save();
        return redirect()->route('disciplinas.index')->with('message', 'Disciplina criado com sucesso!');
    }
}
