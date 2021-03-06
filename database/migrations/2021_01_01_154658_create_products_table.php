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
            $table->string('name');
            $table->string('slug');
            $table->longText('description');
            $table->double('amount');
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("category_sub_id")->nullable();
            // $table->biginteger("quantity")->default(0);
            $table->string("image1");
            $table->string("image2");
            $table->string("image3");
            $table->enum('push_sales' , ['Default','On Sales','Top Rated']);
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
