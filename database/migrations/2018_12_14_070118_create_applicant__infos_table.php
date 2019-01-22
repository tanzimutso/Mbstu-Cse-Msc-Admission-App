<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant__infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('local_guardian_name');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->date('date_of_birth');
            $table->string('nationality');
            $table->string('ssc_passing_year');
            $table->string('ssc_board');
            $table->string('ssc_cgpa');
            $table->string('ssc_class');
            $table->string('hsc_passing_year');
            $table->string('hsc_board');
            $table->string('hsc_cgpa');
            $table->string('hsc_class');
            $table->string('bsc_passing_year');
            $table->string('bsc_university');
            $table->string('bsc_cgpa');
            $table->string('bsc_class');
            $table->string('emergency_contact');
            $table->string('email')->unique();
            $table->string('bkash_transaction_no');
            $table->string('picture');
            $table->string('signature');
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
        Schema::dropIfExists('applicant__infos');
    }
}
