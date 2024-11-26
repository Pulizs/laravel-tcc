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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string("data");
            $table->string("evento");
            $table->string("local");
            $table->string("palestrante");
            $table->bigInteger("user_id")->unsigned();
            $table->timestamps();
          
        });

        Schema::table('eventos', function (Blueprint $table) {
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
        Schema::dropIfExists('eventos');
    }
};
