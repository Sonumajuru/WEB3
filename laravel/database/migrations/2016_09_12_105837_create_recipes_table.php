<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id', 10);
            $table->string('ingredient_1', 50);
            $table->string('ingredient_2', 50);
            $table->string('ingredient_3', 50);
            $table->text('body');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
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
          Schema::drop('recipes');
    }
}
