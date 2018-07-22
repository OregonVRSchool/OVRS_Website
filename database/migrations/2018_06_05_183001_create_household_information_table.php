<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseholdInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('household_information', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('application_id');
            $table->string('first_name', 50);
            $table->string('middle_name', 50);
            $table->string('last_name', 50);
            $table->string('suffix', 10);
            $table->string('salutation', 15);
            $table->string('preferred_name', 50);
            $table->string('gender', 10);
            $table->string('relationship', 15);
            $table->string('marital_status', 15);
            $table->boolean('financial_responsibility');
            $table->boolean('recieve_correspondence');
            $table->boolean('custodial_rights');
            $table->string('email', 50);
            $table->string('work_phone', 15);
            $table->string('home_phone', 15);
            $table->string('cell_phone', 15);
            $table->string('occupation', 50);
            $table->string('employer', 50);
            $table->string('employer_address', 100);
            $table->string('employer_city', 50);
            $table->string('employer_state', 50);
            $table->string('employer_zip', 15);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('household_information');
    }
}
