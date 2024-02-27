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
        Schema::create('college_student_absences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_student_absences_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_student_absences_sem_id_foreign');
            $table->unsignedBigInteger('college_std_sub')->nullable()->index('college_student_absences_college_std_sub_foreign');
            $table->unsignedBigInteger('tpss_id')->nullable()->index('college_student_absences_tpss_id_foreign');
            $table->enum('status', ['warned', 'dropped', 'undropped'])->default('warned');
            $table->integer('chances')->default(0);
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
        Schema::dropIfExists('college_student_absences');
    }
};
