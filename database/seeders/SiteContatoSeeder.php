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
        // create multiple seeds with factory and faker
        SiteContato::factory()->count(100)->create();

        // Create one seed
        /*
        SiteContato::create([
            'nome' => 'SD Sistemas',
            'telefone' => '(46) 3524-5766',
            'email' => 'contato@sd.com.br',
            'motivo_contato' => 1,
            'mensagem' => 'Seja bem vindo ao sistema Super Gestão'
        ]);
        */
    }
}
