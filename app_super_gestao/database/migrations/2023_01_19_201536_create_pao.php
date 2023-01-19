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
        Schema::create('pao', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('preco_kg',8,2)->default(0.01);
            $table->integer('estoque_minimo')->default(0);
            $table->integer('depende')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pao');
    }
};
