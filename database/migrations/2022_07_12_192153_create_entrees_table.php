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
        Schema::create('entrees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantite');
            $table->integer('prix');
            $table->date('dateE');
            $table->unsignedInteger('products_id');
            $table->foreign('products_id')->references('id')->on('products');
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
        Schema::dropIfExists('entrees');
    }
};
