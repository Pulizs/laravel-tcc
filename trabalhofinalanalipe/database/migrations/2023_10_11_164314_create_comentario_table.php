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
        Schema::create('comentario', function (Blueprint $table) {
            $table->id();
            $table->string("conteudo");
            // $table->longblob("imagem");
            $table->string("curtidas");
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("postagem_id")->unsigned();
            $table->timestamps();
          
        });
        
            Schema::table('comentario', function (Blueprint $table) {
                $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
                
            });

            Schema::table('comentario', function (Blueprint $table) {
                $table->foreign("postagem_id")
                ->references("id")
                ->on("postagem")
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
        Schema::dropIfExists('comentario');
    }
};
