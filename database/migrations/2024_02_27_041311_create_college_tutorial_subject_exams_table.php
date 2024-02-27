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
        Schema::create('college_tutorial_subject_exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ctts_id')->nullable()->index('college_tutorial_subject_exams_ctts_id_foreign');
            $table->enum('type', ['qt', 'tt'])->default('qt');
            $table->string('title');
            $table->mediumText('instruction')->nullable();
            $table->integer('question_count')->default(5);
            $table->date('exam_date')->nullable();
            $table->time('start_time')->nullable();
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
        Schema::dropIfExists('college_tutorial_subject_exams');
    }
};
