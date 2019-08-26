<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('type')->nullable(); // dove, leather, the name of option available
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('sku')->nullable();
            $table->string('color')->nullable();
            $table->boolean('default')->default(false);
            $table->boolean('active')->default(false);
            $table->unsignedBigInteger('option_id');

            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('option_values');
    }
}
