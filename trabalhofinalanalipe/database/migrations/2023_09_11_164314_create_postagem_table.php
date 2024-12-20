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
        Schema::create('postagem', function (Blueprint $table) {
            $table->id();
            $table->string("titulo");
            $table->json("images")->nullable();
            $table->string("conteudo");
            $table->bigInteger("curtidas")->nullable();
            $table->bigInteger("user_id")->unsigned();
            $table->timestamps();
          
        });
        
            Schema::table('postagem', function (Blueprint $table) {
                $table->foreign("user_id")
                ->references("id")
                ->on("users")
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
        Schema::dropIfExists('postagem');
    }
};
