<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_application', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->integer('year');
            $table->integer('grade');
            $table->string('status')->default('Open');
            $table->string('progress')->default('Awaiting Submission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_application');
    }
}
