<?php

use Illuminate\Database\Seeder;

class ContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contas')->insert([          
            'conta' => '4342343',
            'valor' => '40'
        ]);
    }
}
