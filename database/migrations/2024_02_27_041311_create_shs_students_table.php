<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shs_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_no')->nullable();
            $table->string('card_no')->nullable();
            $table->string('lrn')->nullable();
            $table->unsignedBigInteger('user_id')->nullable()->index('shs_students_user_id_foreign');
            $table->string('gender');
            $table->string('age');
            $table->string('address');
            $table->string('cell_no');
            $table->dateTime('birthdate');
            $table->string('birthplace');
            $table->string('elementary')->nullable();
            $table->string('elementary_year')->nullable();
            $table->string('jr_high')->nullable();
            $table->string('jr_high_year')->nullable();
            $table->string('sr_high')->nullable();
            $table->string('sr_high_year')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_no')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_no')->nullable();
            $table->string('parents_address')->nullable();
            $table->string('emergency_person')->nullable();
            $table->string('emergency_person_add')->nullable();
            $table->string('emergency_person_no')->nullable();
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
        Schema::dropIfExists('shs_students');
    }
};
