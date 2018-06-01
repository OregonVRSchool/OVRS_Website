<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterestsPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interests_page', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('application_id');
            $table->string('sports', 50);
            $table->string('activities', 50);
            $table->string('performing_arts', 50);
            $table->string('instruments', 50);
            $table->string('computer_skills', 50);
            $table->string('typing_speed', 15);
            $table->string('awards', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interests_page');
    }
}
