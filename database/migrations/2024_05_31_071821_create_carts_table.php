<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('CarritoID');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('ProductoID');
            $table->integer('Cantidad');
            $table->timestamps();

            $table->foreign('UserID')->references('UserID')->on('Usuarios')->onDelete('cascade');
            $table->foreign('ProductoID')->references('ProductoID')->on('Productos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
