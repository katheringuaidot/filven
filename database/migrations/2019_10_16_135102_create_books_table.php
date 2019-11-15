<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cod')->unique();
            $table->string('name');
            $table->unsignedBigInteger('id_author');
            $table->integer('quantity');
            $table->string('year');
            $table->unsignedBigInteger('id_edition');
            $table->decimal('precie', 8, 2);
            $table->timestamps();
            $table->softDeletes(); //Nueva línea, para el borrado lógico
            $table->foreign('id_author')->references('id')->on('authors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_edition')->references('id')->on('editions')->onUpdate('cascade')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
