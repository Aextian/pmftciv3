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
        Schema::create('college_student_permits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('std_prog_id')->nullable()->index('college_student_permits_std_prog_id_foreign');
            $table->unsignedBigInteger('gp_id')->nullable()->index('college_student_permits_gp_id_foreign');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_student_permits_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_student_permits_sem_id_foreign');
            $table->string('permit_no')->nullable();
            $table->date('date_permitted')->nullable();
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
        Schema::dropIfExists('college_student_permits');
    }
};
