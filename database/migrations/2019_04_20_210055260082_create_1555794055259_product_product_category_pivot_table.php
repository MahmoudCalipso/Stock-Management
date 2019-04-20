<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1555794055259ProductProductCategoryPivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_product_category', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedInteger('product_category_id');
            $table->foreign('product_category_id')->references('id')->on('product_categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_product_category');
    }
}
