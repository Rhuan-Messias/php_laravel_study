<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criando a tabela filiais
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial',30);
            $table->timestamps();
        });
        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->id();
            // essa vai receber o foreignkey da filiais e da produtos
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            // colunas da tabela produtos que dependem da filial
            $table->float('preco_venda',8,2)->default(0.01);
            $table->integer('estoque_minimo')->default(1);
            $table->integer('estoque_maximo')->default(1);
            $table->string('filial',30);
            $table->timestamps();
            //incluir as foreign keys
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });

        //removendo colunas da tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn(['preco_venda','estoque_minimo','estoque_maximo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //adicionar colunas de volta na tabela produtos
        Schema::table('produtos', function(Blueprint $table) {
            $table->decimal('preco_venda',8,2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
        });

        // remover a tabela produto_filiais
        Schema::dropIfExists('produto_filiais');

        //remover a tabela filiais 
        Schema::dropIfExists('filiais');
    }
}
