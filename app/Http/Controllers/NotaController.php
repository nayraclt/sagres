<?php

namespace App\Http\Controllers;


use App\Models\Aluno;
use App\Models\Disciplina;
use App\Models\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotaController extends Controller
{
    public function index(Request $request)
    {
        $params = $request->all();
        $aluno = Aluno::find($params['aluno']);

//        $notas = Nota::orderBy('created_at', 'desc')->paginate(10);

        $notas = DB::table('tb_nota')
            ->select('tb_nota.*', 'tb_disciplina.nome')
            ->join('tb_disciplina', 'tb_disciplina.id', '=', 'tb_nota.disciplina_id')
            ->where('tb_nota.aluno_id', $params['aluno'])
            ->get();

        $notasMedia = $this->mediaNotas($notas);

        return view('notas.index',['notas' => $notas, 'aluno'=>$aluno,'mediaNotas'=>$notasMedia]);
    }

    public function create(Request $request)
    {
        $params =$request->all();
        $disciplinas = Disciplina::all();
        return view('notas.create', ['disciplinas'=> $disciplinas, 'params'=>$params]);
    }

    public function store(Request $request)
    {
        $nota = new Nota();
        $nota->aluno_id        = $request->aluno_id;
        $nota->disciplina_id   = $request->disciplina_id;
        $nota->nota            = $request->nota;
        $nota->save();
        return redirect()->route('notas.index', ['aluno' => $nota->aluno_id])->with('message', 'Nota lançada com sucesso!');
    }

    private function mediaNotas( $input )
    {

        $disciplinas = [];
        foreach($input as $key => $value) {
            $disciplinas[$value->disciplina_id][] = $value;
        }

        $disciplinaNotas = [];
        $arrDisciplinasTratadas = [];
        foreach ($disciplinas as $disciplina) {
            $countNotas = count($disciplina);
            $sumNotas = (array_sum(array_column($disciplina, 'nota')));
            $mediaNotas = $sumNotas/$countNotas;
            $mediaNotas = number_format($mediaNotas, 2);


            $disciplinaNotas = ['qtdNotas'=>$countNotas, 'somaNotas' => $sumNotas, 'mediaNotas'=>$mediaNotas, 'nomeDisciplina'=>$disciplina[0]->nome];
            array_push($arrDisciplinasTratadas, $disciplinaNotas);
        }

        return $arrDisciplinasTratadas;
    }

}
