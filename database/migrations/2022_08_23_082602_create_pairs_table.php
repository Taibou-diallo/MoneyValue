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
            $table->id();
            $table->unsignedBigInteger('currency_start')->nullable();
            $table->foreign('currency_start')->references('id')->on('currencies');
            $table->unsignedBigInteger('currency_end')->nullable();
            $table->foreign('currency_end')->references('id')->on('currencies');
            $table->decimal('rate', 12, 6);
            // $table->enum('satus', ['support', 'no support']);
            $table->unique(['currency_start', 'currency_end']);
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
        Schema::dropIfExists('pairs');
    }
};
