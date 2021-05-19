<?php

use Illuminate\Database\Seeder;

class OperacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operacaos')->insert([          
            'nome' => 'Depósito',
        ]);
        DB::table('operacaos')->insert([          
            'nome' => 'Saque',
        ]);
    }
}
