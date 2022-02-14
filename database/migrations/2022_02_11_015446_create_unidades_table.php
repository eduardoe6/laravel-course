<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao');
            $table->timestamps();
        });

        // create relationship between unidades and produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        // create relationship between unidades and produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // remove relationship between unidades and produtos
        Schema::table('produtos', function (Blueprint $table) {
            // remove foreign key
            $table->dropForeign('produtos_unidade_id_foreign'); // {tablename}_{columnname}_foreign

            // remove column unidade_id
            $table->dropColumn('unidade_id');
        });

        // remove relationship between unidades and produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            // remove foreign key
            $table->dropForeign('produto_detalhes_unidade_id_foreign'); // {tablename}_{columnname}_foreign

            // remove column unidade_id
            $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidades');
    }
}
