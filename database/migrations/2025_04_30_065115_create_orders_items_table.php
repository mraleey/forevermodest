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
    Schema::create('order_items', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('order_id');
        $table->string('product_name');
        $table->integer('quantity');
        $table->decimal('price', 8, 2);
        $table->decimal('subtotal', 8, 2); // <-- ADD THIS LINE
        $table->timestamps();
    
        $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
    });
    
    
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
