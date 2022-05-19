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
             
        	Schema::create('partners', function (Blueprint $table) {
			$table->id();
            $table->string('social_reason');
			$table->string('contact');
			$table->foreignId('logo_id')
				  ->constrained()
				  ->onUpdate('restrict')
				  ->onDelete('restrict');
			$table->string('website');
			$table->string('email');
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
        //
    }
};
