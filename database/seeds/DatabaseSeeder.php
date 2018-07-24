<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AlunoTableSeeder::class);
         $this->call(DisciplinaTableSeeder::class);
         $this->call(NotaTableSeeder::class);
    }
}
