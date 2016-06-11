<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersMenuValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_dropdown', function (Blueprint $table) {
            $table->increments('menu_id');
            $table->string('manu_name', 100);
            $table->string('menu_code', 100);
            $table->text('menu_link');
            $table->string('menu_icon', 50);
            $table->boolean('menu_enabled');
            $table->integer('meno_order')->unique();
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
        Schema::drop('menu_dropdown');
    }
}
