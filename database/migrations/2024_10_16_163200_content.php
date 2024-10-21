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
        Schema::create('mycontent', function (Blueprint $table) {
            $table->string('idpct', 9)->primary();
            $table->string('title', 30);
            $table->string('content', 3000);
            $table->unsignedInteger('like', false)->length(3); 
            $table->string('comment', 1000);
            $table->string('idusr_kbt', 9);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
