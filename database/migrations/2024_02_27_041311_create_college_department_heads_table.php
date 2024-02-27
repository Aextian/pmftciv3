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
        Schema::create('college_department_heads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_department_heads_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_department_heads_sem_id_foreign');
            $table->unsignedBigInteger('teacher_id')->nullable()->index('college_department_heads_teacher_id_foreign');
            $table->unsignedBigInteger('program_id')->nullable()->index('college_department_heads_program_id_foreign');
            $table->string('name');
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
        Schema::dropIfExists('college_department_heads');
    }
};
