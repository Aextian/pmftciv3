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
        Schema::create('shs_student_programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('shs_student_programs_sy_id_foreign');
            $table->unsignedBigInteger('yr_lvl_id')->nullable()->index('shs_student_programs_yr_lvl_id_foreign');
            $table->unsignedBigInteger('strand_id')->nullable()->index('shs_student_programs_strand_id_foreign');
            $table->unsignedBigInteger('std_id')->nullable()->index('shs_student_programs_std_id_foreign');
            $table->unsignedBigInteger('user_id')->nullable()->index('shs_student_programs_user_id_foreign');
            $table->unsignedBigInteger('section_id')->nullable()->index('shs_student_programs_section_id_foreign');
            $table->string('subject_status', 191)->nullable();
            $table->enum('student_status', ['regular', 'irregular', 'reject'])->nullable();
            $table->enum('enrollment_status', ['pending', 'evaluated', 'billed', 'enrolled'])->default('pending');
            $table->unsignedBigInteger('scholarship_id')->nullable()->index('shs_student_programs_scholarship_id_foreign');
            $table->integer('is_transferee')->default(0);
            $table->integer('is_print')->default(0);
            $table->enum('is_back', ['pending', 'evaluated', 'billed'])->nullable();
            $table->string('is_back_note', 191)->nullable();
            $table->integer('is_rejected')->default(0);
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
        Schema::dropIfExists('shs_student_programs');
    }
};
