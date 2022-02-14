<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // default way
        $fornecedor = new Fornecedor();

        $fornecedor->nome = 'Fornecedor 1';
        $fornecedor->site = 'fornecedor1.com.br';
        $fornecedor->uf = 'PR';
        $fornecedor->email = 'contato@fornecedor1.com.br';

        $fornecedor->save();

        // another way, need to set fillable method inside model class.
        Fornecedor::create([
            'nome' => 'Fornecedor 2',
            'site' => 'fornecedor2.com.br',
            'uf' => 'SC',
            'email' => 'contato@fornecedor2.com.br'
        ]);

        // using DB class (dont fill laravel timestamps by default)
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 3',
            'site' => 'fornecedor3.com.br',
            'uf' => 'RS',
            'email' => 'contato@fornecedor3.com.br'
        ]);
    }
}
