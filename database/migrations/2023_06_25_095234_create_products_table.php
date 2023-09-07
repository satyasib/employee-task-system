<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
			$table->string('product_name', 30);
            $table->string('product_sku', 10);
            $table->string('product_slug', 30);
			$table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
			$table->string('sub_category_id', 10)->nullable(true);
            $table->string('product_type_id', 2)->nullable(true);
            $table->string('product_tax', 2)->nullable(true);
            $table->string('product_feature', 2)->nullable(true);
            $table->string('product_badges', 2)->nullable(true);
            $table->string('product_desc', 255)->nullable(true);
            $table->string('product_status', 2)->default('1');
            $table->string('product_postion', 2)->default('0');
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
        Schema::dropIfExists('products');
    }
}
