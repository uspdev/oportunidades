<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('titulo')->nullable(false);
            $table->text('area')->nullable(false);
            $table->text('descricao')->nullable(false);
            $table->text('beneficios')->nullable(false);
            $table->text('empresa')->nullable(false);
            $table->text('local')->nullable(false);
            $table->text('regime_trabalho')->nullable(false);
            $table->text('jornada_semanal')->nullable(false);
            $table->text('salario_mensal')->nullable(false);
            $table->text('perfil_candidato')->nullable(false);

            $table->text('nome_contato')->nullable(false);
            $table->text('telefone_contato')->nullable(false);
            $table->text('email_contato')->nullable(false);
            $table->text('site_contato')->nullable(false);
            $table->text('data_cadastro')->nullable(false);
            $table->text('data_inicio_divulgacao')->nullable(false);
            $table->text('data_final_divulgacao')->nullable(false);
            $table->text('status')->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vagas');
    }
}
