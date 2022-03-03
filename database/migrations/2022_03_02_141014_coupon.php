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
         Schema::create('coupons', function (Blueprint $table) {
			$table->id();
            $table->string('name');
			$table->timestamp('start_date');
			$table->timestamp('end_date');
			$table->double('discount');
			$table->boolean('state');
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
        Schema::dropIfExists('coupons');
    }
};
