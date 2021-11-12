<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('order_type_id');
            $table->unsignedBigInteger('payment_method_id');
            
            $table->integer('turn');
            $table->integer('total');
            $table->text('comment');

            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('order_type_id')->references('id')->on('order_types');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
