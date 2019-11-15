<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellsPlusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells_pluses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_sell');
            $table->integer('id_books');
            $table->integer('quantity');
            $table->string('precies');
            $table->timestamps();
            $table->softDeletes(); //Nueva línea, para el borrado lógico

            $table->foreign('id_sell')->references('id')->on('sells')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_books')->references('id')->on('books')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sells_pluses');
    }
}
