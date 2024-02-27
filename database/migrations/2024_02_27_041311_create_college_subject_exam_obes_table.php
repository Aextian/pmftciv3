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
        Schema::create('college_subject_exam_obes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tpss_id')->nullable()->index('college_subject_exam_obes_tpss_id_foreign');
            $table->unsignedBigInteger('grading_period_id')->nullable()->index('college_subject_exam_obes_grading_period_id_foreign');
            $table->string('title');
            $table->longText('instruction')->nullable();
            $table->integer('points')->nullable();
            $table->date('exam_date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->string('references')->nullable();
            $table->string('file_ext')->nullable();
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
        Schema::dropIfExists('college_subject_exam_obes');
    }
};
