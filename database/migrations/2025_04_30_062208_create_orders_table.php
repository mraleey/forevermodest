<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('country');
            $table->string('state')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('zip');
            $table->boolean('create_account')->default(false);
            $table->string('password')->nullable();
            $table->boolean('ship_to_different_address')->default(false);
            $table->text('order_note')->nullable();
            $table->decimal('total_price', 10, 2);
            $table->string('payment_method');
            $table->timestamps();
        });
    }
    

public function down()
{
    Schema::dropIfExists('orders');
}

};
