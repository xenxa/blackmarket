<?php

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
            $table->increments('id');
            $table->string('sku')->index();
            $table->decimal('price', 20, 2)->index();
            $table->integer('category_id')->nullable()->index();
            $table->string('name')->index();
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('image');
            $table->json('options')->nullable();
            $table->float('rating_cache', 2, 1)->default(0);
            $table->integer('rating_count')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
