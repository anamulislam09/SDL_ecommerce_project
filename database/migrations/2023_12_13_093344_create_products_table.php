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
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->integer('brand_id')->nullable();
            $table->string('product_name');
            $table->string('product_slug');
            $table->string('product_code');
            $table->string('product_unit')->nullable();
            $table->string('product_tags')->nullable();
            $table->string('product_color')->nullable();
            $table->string('product_size')->nullable();
            $table->string('product_video')->nullable();
            $table->string('purchase_price')->nullable();
            $table->string('selling_price')->nullable();
            $table->string('descount_price')->nullable();
            $table->string('stock_quantity')->nullable();
            $table->integer('warehouse')->nullable();
            $table->string('short_description')->nullable();
            $table->text('product_description')->nullable();
            $table->string('product_thumbnail')->nullable();
            $table->text('images')->nullable();
            $table->integer('featured')->nullable();
            $table->integer('today_deal')->nullable();
            $table->integer('status')->nullable();
            $table->integer('product_slider')->nullable();
            $table->integer('cash_on_delivery')->nullable();
            $table->integer('admin_id')->nullable();
            $table->integer('pickup_point_id')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
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
