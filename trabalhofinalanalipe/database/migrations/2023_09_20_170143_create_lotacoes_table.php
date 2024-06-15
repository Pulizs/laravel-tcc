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
        Schema::create('lotacoes', function (Blueprint $table) {
            $table->id();
            $table->string("nomeCampus");
            $table->string("departamento");
            $table->string("areaAtuacao");
            $table->bigInteger("professor_id")->unsigned();
            $table->timestamps();
            
        });
            Schema::table('lotacoes', function (Blueprint $table) {
                $table->foreign('professor_id')->references('id')->on('professores')->onDelete('cascade');
                
            });
                
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lotacoes');
    }
};
