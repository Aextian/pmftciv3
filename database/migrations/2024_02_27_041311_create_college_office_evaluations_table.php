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
        Schema::create('college_office_evaluations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('c_sy_id')->nullable()->index('college_office_evaluations_c_sy_id_foreign');
            $table->unsignedBigInteger('c_sem_id')->nullable()->index('college_office_evaluations_c_sem_id_foreign');
            $table->unsignedBigInteger('user_id')->nullable()->index('college_office_evaluations_user_id_foreign');
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
        Schema::dropIfExists('college_office_evaluations');
    }
};
