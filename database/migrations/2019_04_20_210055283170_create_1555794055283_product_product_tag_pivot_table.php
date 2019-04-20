<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1555794055283ProductProductTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_product_tag', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedInteger('product_tag_id');
            $table->foreign('product_tag_id')->references('id')->on('product_tags');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_product_tag');
    }
}
