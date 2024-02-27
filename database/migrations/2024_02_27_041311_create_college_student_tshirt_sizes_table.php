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
        Schema::create('college_student_tshirt_sizes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_student_tshirt_sizes_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_student_tshirt_sizes_sem_id_foreign');
            $table->unsignedBigInteger('std_prog_id')->nullable()->index('college_student_tshirt_sizes_std_prog_id_foreign');
            $table->string('size')->nullable();
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
        Schema::dropIfExists('college_student_tshirt_sizes');
    }
};
