<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('tab_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('customer_id');
            $table->unsignedDecimal('shipping_cost', 8, 2);
            $table->unsignedDecimal('basket_total', 8, 2);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('billing_address');
            $table->string('shipping_address');
            $table->string('status');
            $table->string('delivery_note');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tab_orders');
    }
}
