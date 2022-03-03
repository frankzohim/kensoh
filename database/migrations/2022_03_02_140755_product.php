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
    {	Schema::create('products', function (Blueprint $table) {
			$table->id();
            $table->string('name');
			$table->string('slug');
			$table->boolean('new');
			$table->string('position');
			$table->boolean('featured');
			$table->string('meta_description');
			$table->string('meta_keywords');
			$table->boolean('state');
			$table->double('unit_price');
			$table->bigInteger('stock_quantity');
			$table->boolean('nature');
			$table->foreignId('category_id')
				  ->constrained()
				  ->onUpdate('restrict')
				  ->onDelete('restrict');
			$table->foreignId('brand_id')
				  ->constrained()
				  ->onUpdate('restrict')
				  ->onDelete('restrict');
			$table->foreignId('store_id')
				  ->constrained()
				  ->onUpdate('restrict')
				  ->onDelete('restrict');
			$table->foreignId('user_id')
				  ->constrained()
				  ->onUpdate('restrict')
				  ->onDelete('restrict');
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
