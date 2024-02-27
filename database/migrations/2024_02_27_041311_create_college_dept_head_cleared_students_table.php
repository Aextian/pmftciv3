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
        Schema::create('college_dept_head_cleared_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dept_head_user_id')->nullable()->index('college_dept_head_cleared_students_dept_head_user_id_foreign');
            $table->unsignedBigInteger('std_id')->nullable()->index('college_dept_head_cleared_students_std_id_foreign');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_dept_head_cleared_students_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_dept_head_cleared_students_sem_id_foreign');
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
        Schema::dropIfExists('college_dept_head_cleared_students');
    }
};
