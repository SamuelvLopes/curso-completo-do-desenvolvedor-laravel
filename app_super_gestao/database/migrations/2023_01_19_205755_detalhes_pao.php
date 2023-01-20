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
        Schema::create('detalhes_pao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pao_id');
            $table->timestamps();
            $table->float('granularidade',8,2)->default(0.01);
            
            //constraint
            $table->foreign('pao_id')->references('id')->on('pao');
            $table->unique('pao_id'); // é 1:1 se tirar o unique fica n:n
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalhes_pao');
    }
};
