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
        Schema::create('shs_student_exam_obes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('obe_exam_id')->nullable()->index('shs_student_exam_obes_obe_exam_id_foreign');
            $table->unsignedBigInteger('std_id')->nullable()->index('shs_student_exam_obes_std_id_foreign');
            $table->longText('answer')->nullable();
            $table->string('file')->nullable();
            $table->string('file_ext')->nullable();
            $table->integer('points')->default(0);
            $table->dateTime('time_submitted')->nullable();
            $table->integer('is_submitted')->default(0);
            $table->integer('is_generated')->default(0);
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
        Schema::dropIfExists('shs_student_exam_obes');
    }
};
