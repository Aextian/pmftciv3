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
        Schema::create('shs_offered_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('shs_offered_subjects_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('shs_offered_subjects_sem_id_foreign');
            $table->unsignedBigInteger('yr_lvl_id')->nullable()->index('shs_offered_subjects_yr_lvl_id_foreign');
            $table->unsignedBigInteger('strand_id')->nullable()->index('shs_offered_subjects_strand_id_foreign');
            $table->unsignedBigInteger('subject_id')->nullable()->index('shs_offered_subjects_subject_id_foreign');
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
        Schema::dropIfExists('shs_offered_subjects');
    }
};
