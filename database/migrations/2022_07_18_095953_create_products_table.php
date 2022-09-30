<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->integer('cate_id')->nullable();
            $table->string('p_name')->nullable();
            $table->string('p_price')->nullable();
            $table->string('m_price')->nullable();
            $table->string('pqty')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('discount')->nullable();
            $table->string('p_mainimg')->nullable();
            $table->tinyInteger('top_product')->default('0');
            $table->string('stock_status')->default("In_stock");
            $table->tinyInteger('delete_status')->default('0');
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
};
