<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('name')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('display_name')->nullable();
            $table->text('description')->nullable();
            $table->text('care')->nullable();
            $table->text('dimensions')->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('sku')->nullable();
            $table->boolean('finance_available')->default(true);
            $table->string('finance_terms')->nullable();
            $table->boolean('warranty')->default(true);
            $table->boolean('returnable')->nullable(true);
            $table->boolean('delivery_included')->default(true);
            $table->boolean('active')->default(false);
            $table->unsignedBigInteger('category_id');

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
