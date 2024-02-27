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
        Schema::create('college_student_evaluations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('std_id')->nullable()->index('college_student_evaluations_std_id_foreign');
            $table->unsignedBigInteger('tpss_id')->nullable()->index('college_student_evaluations_tpss_id_foreign');
            $table->integer('total_rate')->default(0);
            $table->integer('total_q_points')->default(0);
            $table->longText('rating');
            $table->longText('remarks');
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
        Schema::dropIfExists('college_student_evaluations');
    }
};
