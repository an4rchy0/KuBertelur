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
        Schema::create('usr_kpt', function (Blueprint $table) {
            $table->string('idusr_kbt',9)->primary();
            $table->string('name',30);
            $table->string('username',30);
            $table->string('call',15);
            $table->string('email',30);
            $table->string('password',20);
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
        Schema::dropIfExists('usr_kpt');
    }
};
