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
        Schema::create('college_student_assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('std_prog_id')->nullable()->index('college_student_assignments_std_prog_id_foreign');
            $table->unsignedBigInteger('tpss_id')->nullable()->index('college_student_assignments_tpss_id_foreign');
            $table->unsignedBigInteger('assignment_id')->nullable()->index('college_student_assignments_assignment_id_foreign');
            $table->integer('points')->default(0);
            $table->longText('answer')->nullable();
            $table->date('date_submitted')->nullable();
            $table->enum('type', ['answered', 'checked'])->default('answered');
            $table->string('assignment_file')->nullable();
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
        Schema::dropIfExists('college_student_assignments');
    }
};
