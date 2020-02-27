<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->decimal('total', 10, 2);
            $table->unsignedBigInteger('user_owner_id');
            $table->unsignedBigInteger('user_buyer_id');
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('process_id');

            $table->foreign('user_owner_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('user_buyer_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('payment_id')
                ->references('id')
                ->on('payments')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('status_id')
                ->references('id')
                ->on('statuses')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('transaction_id')
                ->references('id')
                ->on('transaction_types')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('process_id')
                ->references('id')
                ->on('processes')
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
        Schema::dropIfExists('orders');
    }
}
