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
        Schema::create('shs_teacher_progsubsecs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('shs_teacher_progsubsecs_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('shs_teacher_progsubsecs_sem_id_foreign');
            $table->unsignedBigInteger('strand_id')->nullable()->index('shs_teacher_progsubsecs_strand_id_foreign');
            $table->unsignedBigInteger('subject_id')->nullable()->index('shs_teacher_progsubsecs_subject_id_foreign');
            $table->unsignedBigInteger('progsubsec_id')->nullable()->index('shs_teacher_progsubsecs_progsubsec_id_foreign');
            $table->unsignedBigInteger('teacher_id')->nullable()->index('shs_teacher_progsubsecs_teacher_id_foreign');
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
        Schema::dropIfExists('shs_teacher_progsubsecs');
    }
};
