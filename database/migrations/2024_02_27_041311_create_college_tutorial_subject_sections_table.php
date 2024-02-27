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
        Schema::create('college_tutorial_subject_sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_tutorial_subject_sections_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_tutorial_subject_sections_sem_id_foreign');
            $table->unsignedBigInteger('curr_id')->nullable()->index('college_tutorial_subject_sections_curr_id_foreign');
            $table->unsignedBigInteger('program_id')->nullable()->index('college_tutorial_subject_sections_program_id_foreign');
            $table->unsignedBigInteger('yrlvl_id')->nullable()->index('college_tutorial_subject_sections_yrlvl_id_foreign');
            $table->unsignedBigInteger('subject_id')->nullable()->index('college_tutorial_subject_sections_subject_id_foreign');
            $table->unsignedBigInteger('curr_subject_id')->nullable()->index('college_tutorial_subject_sections_curr_subject_id_foreign');
            $table->unsignedBigInteger('section_id')->nullable()->index('college_tutorial_subject_sections_section_id_foreign');
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
        Schema::dropIfExists('college_tutorial_subject_sections');
    }
};
