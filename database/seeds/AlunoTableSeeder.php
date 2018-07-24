<?php

use Illuminate\Database\Seeder;

class AlunoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $qtd = 5;
        for ($i = 1; $i <= $qtd; $i++) {
            DB::table('tb_aluno')->insert([
                'nome' => 'Aluno '.str_random(5),
                'email' => str_random(10).'@gmail.com',
                'matricula' => rand(1000,1999),
                'endereco' => 'Endereco '.str_random(10),
                'bairro' => 'Bairro '.str_random(10),
                'cep' => rand(70000000,79999999),
                'uf' => 'DF',
                'data_entrada' => '2018-01-14 16:00:00',
            ]);
        }


    }
}
