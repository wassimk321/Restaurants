<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResturentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resturents', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('description');
			$table->string('city');
			$table->string('address');
			$table->string('duration');
			$table->string('phone');
			$table->string('image');
			$table->integer('category_id');
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
        Schema::dropIfExists('resturents');
    }
}
