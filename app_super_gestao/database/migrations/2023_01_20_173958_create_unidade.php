<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('descricao',5);
            $table->string('unidade',5);
            $table->timestamps();
        });

        Schema::table('pao',function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');


        });
        Schema::table('detalhes_pao',function(Blueprint $table){
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

        
        Schema::table('detalhes_pao',function(Blueprint $table){
            $table->dropForeign('detalhes_pao_unidade_id_foreign');//[table]_[colun]_foreign
            $table->dropColumn('unidade_id');

        });

        Schema::table('pao',function(Blueprint $table){
            $table->dropForeign('pao_unidade_id_foreign');//[table]_[colun]_foreign
            $table->dropColumn('unidade_id');

        });


        Schema::dropIfExists('unidades');
    }
};
