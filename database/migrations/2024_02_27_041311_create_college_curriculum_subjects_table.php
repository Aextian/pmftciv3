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
        Schema::create('college_curriculum_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_curriculum_subjects_sem_id_foreign');
            $table->unsignedBigInteger('curr_id')->nullable()->index('college_curriculum_subjects_curr_id_foreign');
            $table->unsignedBigInteger('yr_lvl_id')->nullable()->index('college_curriculum_subjects_yr_lvl_id_foreign');
            $table->unsignedBigInteger('program_id')->nullable()->index('college_curriculum_subjects_program_id_foreign');
            $table->unsignedBigInteger('curr_program_id')->nullable()->index('college_curriculum_subjects_curr_program_id_foreign');
            $table->unsignedBigInteger('subject_id')->nullable()->index('college_curriculum_subjects_subject_id_foreign');
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
        Schema::dropIfExists('college_curriculum_subjects');
    }
};
