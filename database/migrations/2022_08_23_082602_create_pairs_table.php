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
            $table->string('currency_start');
            $table->foreign('currency_start')->references('currency_code')->on('currencies');
            $table->string('currency_end');
            $table->foreign('currency_end')->references('currency_code')->on('currencies');
            $table->decimal('rate', 12, 6);
            // $table->unique(['currency_start', 'currency_end']);
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
