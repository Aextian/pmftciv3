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
        Schema::create('college_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_tasks_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_tasks_sem_id_foreign');
            $table->unsignedBigInteger('grading_period_id')->nullable()->index('college_tasks_grading_period_id_foreign');
            $table->mediumText('title')->nullable();
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
        Schema::dropIfExists('college_tasks');
    }
};
