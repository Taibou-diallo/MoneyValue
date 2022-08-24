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
        Schema::create('pairs', function (Blueprint $table) {
            $table->increments('id');
            $table->double('rate', 20, 2);
            $table->enum('satus', ['support', 'no support']);
            $table->unsignedBigInteger('currency_start')->nullable(); //cle etranger de la table currencies ne peut pas etre nulle
            $table->unsignedBigInteger('currency_end')->nullable(); //cle etranger de la table currencies ne peut pas etre nulle
            $table->timestamps();
            $table->foreign('currency_start')->references('id')->on('currencies')->onDelete('cascade');
            $table->foreign('currency_end')->references('id')->on('currencies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pairs');
    }
};
