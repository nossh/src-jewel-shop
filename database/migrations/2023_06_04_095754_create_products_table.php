<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->string('short_description');
            $table->string('image_name');
            $table->string('price');
            $table->string('stock_status');
            $table->string('sale_price');
            $table->string('platinum_price');
            $table->string('platinum_sale_price');
            $table->string('gold_price');
            $table->string('gold_sale_price');
            $table->string('all_pack_price');
            $table->string('all_pack_sale_price');
            $table->string('color_name');
            $table->string('color_code');
            $table->string('SKU');
            $table->string('EAN');
            $table->string('package');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
