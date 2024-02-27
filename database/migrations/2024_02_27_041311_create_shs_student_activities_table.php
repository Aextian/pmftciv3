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
        Schema::create('shs_student_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('std_prog_id')->nullable()->index('shs_student_activities_std_prog_id_foreign');
            $table->unsignedBigInteger('tpss_id')->nullable()->index('shs_student_activities_tpss_id_foreign');
            $table->unsignedBigInteger('activity_id')->nullable()->index('shs_student_activities_activity_id_foreign');
            $table->integer('points')->default(0);
            $table->longText('answer')->nullable();
            $table->time('time_submitted')->nullable();
            $table->enum('type', ['answered', 'checked', 'generated'])->default('answered');
            $table->string('activity_file')->nullable();
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
        Schema::dropIfExists('shs_student_activities');
    }
};
