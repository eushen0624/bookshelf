<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->timestamps();
            $table->string('name');
            $table->string('author');
            $table->string('description');
            $table->string('imgPath');
            $table->decimal('price', 10, 2);
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('transaction_type_id');

            $table->foreign('genre_id')
                ->references('id')
                ->on('genres')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('transaction_type_id')
                ->references('id')
                ->on('transaction_types')
                ->onDelete('restrict')
                ->onUpdate('cascade');
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
