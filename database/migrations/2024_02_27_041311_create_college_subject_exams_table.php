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
        Schema::create('college_subject_exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tpss_id')->nullable()->index('college_subject_exams_tpss_id_foreign');
            $table->unsignedBigInteger('grading_period_id')->nullable()->index('college_subject_exams_grading_period_id_foreign');
            $table->string('type', 191)->default('qt');
            $table->integer('exam_time')->nullable();
            $table->integer('number_of_items_id')->nullable();
            $table->string('title');
            $table->mediumText('instruction')->nullable();
            $table->integer('question_count')->default(5);
            $table->date('exam_date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('take_before')->nullable();
            $table->time('end_time')->nullable();
            $table->enum('status', ['draft', 'published'])->default('draft');
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
        Schema::dropIfExists('college_subject_exams');
    }
};
