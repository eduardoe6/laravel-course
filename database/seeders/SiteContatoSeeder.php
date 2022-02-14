<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteContato::create([
            'nome' => 'SD Sistemas',
            'telefone' => '(46) 3524-5766',
            'email' => 'contato@sd.com.br',
            'motivo' => 1,
            'mensagem' => 'Seja bem vindo ao sistema Super Gestão'
        ]);
    }
}
