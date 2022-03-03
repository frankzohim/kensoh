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
        Schema::create('package', function (Blueprint $table) {
			$table->id();
            $table->string('description');
			$table->double('length');
			$table->double('width');
			$table->double('weight');
			$table->foreignId('departure')
				  ->constrained('towns')
				  ->onUpdate('restrict')
				  ->onDelete('restrict');
			$table->foreignId('destination')
				  ->constrained('towns')
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
        Schema::dropIfExists('package');
    }
};
