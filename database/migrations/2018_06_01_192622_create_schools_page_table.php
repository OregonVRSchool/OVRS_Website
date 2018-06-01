<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools_page', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('application_id');
            $table->string('name', 50);
            $table->string('address', 150);
            $table->string('phone', 15);
            $table->date('from_date');
            $table->date('to_date');
            $table->string('grade_compleated', 15);
            $table->string('math_teacher', 50);
            $table->string('english_teacher', 50);
            $table->string('computer_teacher', 50);
            $table->string('expelled', 250);
            $table->string('suspended', 250);
            $table->string('skipped', 250);
            $table->boolean('iep');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools_page');
    }
}
