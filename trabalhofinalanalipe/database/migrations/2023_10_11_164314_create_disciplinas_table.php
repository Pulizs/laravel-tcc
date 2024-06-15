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
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("curso");
            $table->string("sigla");
            $table->bigInteger("cargaHoraria");
            $table->bigInteger("professor_id")->unsigned();
            $table->timestamps();
          
        });
        
            Schema::table('disciplinas', function (Blueprint $table) {
                $table->foreign("professor_id")
                ->references("id")
                ->on("professores")
                ->onDelete("cascade");
                
            });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplinas');
    }
};
