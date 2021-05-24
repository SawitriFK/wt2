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
            $table->id();
            $table->string('name_order');
            $table->text('address_order')->nullable();
            $table->string('mark_order')->nullable();
            $table->string('telp_order')->nullable();
            $table->string('email_order')->nullable();
            $table->string('pack_order');
            $table->char('odpzone_order', 3);
            $table->char('odp_order', 3);
            $table->char('odpnum_order', 3);
            $table->string('status_order');
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
        Schema::dropIfExists('orders');
    }
}
