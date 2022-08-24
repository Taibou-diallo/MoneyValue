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
        Schema::create('conversions', function (Blueprint $table) {
            $table->id();
            $table->date('conversion_date');
            $table->decimal('amount', 20, 2);
            $table->unsignedBigInteger('pair_id')->nullable(); //cle etranger de la table currencies ne peut pas etre nulle
            $table->timestamps();
            $table->foreign('pair_id')->references('id')->on('pairs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversions');
    }
};
