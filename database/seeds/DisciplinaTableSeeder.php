<?php

use Illuminate\Database\Seeder;

class DisciplinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_disciplina')->insert([
            'nome' => 'Física',
        ]);
        DB::table('tb_disciplina')->insert([
            'nome' => 'Matematica',
        ]);
        DB::table('tb_disciplina')->insert([
            'nome' => 'Português',
        ]);
    }
}
