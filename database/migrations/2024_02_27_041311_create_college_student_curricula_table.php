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
        Schema::create('college_student_curricula', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_student_curricula_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_student_curricula_sem_id_foreign');
            $table->unsignedBigInteger('yl_id')->nullable()->index('college_student_curricula_yl_id_foreign');
            $table->unsignedBigInteger('program_id')->nullable()->index('college_student_curricula_program_id_foreign');
            $table->unsignedBigInteger('curr_id')->nullable()->index('college_student_curricula_curr_id_foreign');
            $table->unsignedBigInteger('user_id')->nullable()->index('college_student_curricula_user_id_foreign');
            $table->unsignedBigInteger('student_id')->nullable()->index('college_student_curricula_student_id_foreign');
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
        Schema::dropIfExists('college_student_curricula');
    }
};
