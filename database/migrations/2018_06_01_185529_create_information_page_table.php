<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_page', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('application_id');
            $table->string('preferred_name', 50);
            $table->string('steam_username', 50);
            $table->string('email', 50);
            $table->string('home_phone', 50);
            $table->string('cell_phone', 50);
            $table->string('address', 100);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->string('zip', 15);
            $table->string('country', 50);
            $table->string('gender', 15);
            $table->string('ethnicity', 15);
            $table->string('race', 15);
            $table->string('language', 15);
            $table->string('other_languages', 50);
            $table->string('birth_city', 50);
            $table->string('referred_by', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information_page');
    }
}
