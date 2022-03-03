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
         Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
			$table->string('slug');
			$table->string('meta_description');
			$table->string('meta_keywords');
			$table->boolean('state');
			$table->bigInteger('parent');
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
        Schema::dropIfExists('categories');
    }
};
