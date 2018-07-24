<?php

use Illuminate\Database\Seeder;

class NotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qtdAlunos = 5;
        $qtdNotas = 3;
        $qtdDisciplinas = 3;

        for ($iAluno = 1; $iAluno <= $qtdAlunos; $iAluno++) {
            for ($iDisciplina = 1; $iDisciplina <= $qtdDisciplinas; $iDisciplina++) {
                for ($i = 1; $i <= $qtdNotas; $i++) {
                    DB::table('tb_nota')->insert([
                        'aluno_id' => $iAluno,
                        'disciplina_id' => $iDisciplina,
                        'nota' => rand(0, 10)
                    ]);
                }
            }
        }

    }
}
