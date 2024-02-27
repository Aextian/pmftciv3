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
        Schema::create('college_student_ob_quizzes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('std_prog_id')->nullable()->index('college_student_ob_quizzes_std_prog_id_foreign');
            $table->unsignedBigInteger('tpss_id')->nullable()->index('college_student_ob_quizzes_tpss_id_foreign');
            $table->unsignedBigInteger('obquiz_id')->nullable()->index('college_student_ob_quizzes_obquiz_id_foreign');
            $table->integer('points')->default(0);
            $table->longText('answer')->nullable();
            $table->dateTime('time_submitted')->nullable();
            $table->enum('type', ['draft', 'answered', 'checked'])->default('draft');
            $table->string('obquiz_file')->nullable();
            $table->string('file_ext')->nullable();
            $table->boolean('is_manual_add')->default(false);
            $table->boolean('is_generated')->default(false);
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
        Schema::dropIfExists('college_student_ob_quizzes');
    }
};
