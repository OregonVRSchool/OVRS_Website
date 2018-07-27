<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiblingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siblings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('application_id');
            $table->boolean('has_siblings');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('username', 50);
            $table->integer('student_id');
            $table->string('relationship', 50);
            $table->string('years_attended', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siblings');
    }
}
