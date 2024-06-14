<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('carts')) {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('CarritoID');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('id');
            $table->integer('Cantidad');
            $table->timestamps();

            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id')->references('id')->on('productos')->onDelete('cascade');
        });
    }
}

    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
