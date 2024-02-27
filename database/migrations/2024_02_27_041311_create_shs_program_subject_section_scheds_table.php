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
        Schema::create('shs_program_subject_section_scheds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('strand_id')->nullable()->index('shs_program_subject_section_scheds_strand_id_foreign');
            $table->unsignedBigInteger('subject_id')->nullable()->index('shs_program_subject_section_scheds_subject_id_foreign');
            $table->unsignedBigInteger('section_id')->nullable()->index('shs_program_subject_section_scheds_section_id_foreign');
            $table->unsignedBigInteger('progsubsec_id')->nullable()->index('shs_program_subject_section_scheds_progsubsec_id_foreign');
            $table->string('sched_day');
            $table->time('from_time');
            $table->time('to_time');
            $table->string('room_no')->nullable();
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
        Schema::dropIfExists('shs_program_subject_section_scheds');
    }
};
