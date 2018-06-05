<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentQuestionairTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_questionair', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('application_id');
            $table->string('question_one', 250);
            $table->string('question_two', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parent_questionair');
    }
}
