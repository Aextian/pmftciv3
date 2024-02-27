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
        Schema::create('teacher_office_evaluations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('c_sy_id')->nullable()->index('teacher_office_evaluations_c_sy_id_foreign');
            $table->unsignedBigInteger('shs_sy_id')->nullable()->index('teacher_office_evaluations_shs_sy_id_foreign');
            $table->unsignedBigInteger('c_sem_id')->nullable()->index('teacher_office_evaluations_c_sem_id_foreign');
            $table->unsignedBigInteger('shs_sem_id')->nullable()->index('teacher_office_evaluations_shs_sem_id_foreign');
            $table->unsignedBigInteger('teacher_id')->nullable()->index('teacher_office_evaluations_teacher_id_foreign');
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
        Schema::dropIfExists('teacher_office_evaluations');
    }
};
