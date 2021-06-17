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
            $table->string('product_name')->unique();
            $table->string('product_description');
            $table->boolean('product_approval');
            $table->string('product_price');
            $table->string('product_img')->nullable();
            $table->string('review')->nullable();
            $table->integer('rating')->nullable();
            $table->bigInteger('category_id')->nullable()->unsigned();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');



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