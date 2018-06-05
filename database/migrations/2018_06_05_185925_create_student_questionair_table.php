<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentQuestionairTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_questionair', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('application_id');
            $table->string('question_one', 250);
            $table->string('question_two', 250);
            $table->string('question_three', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_questionair');
    }
}
