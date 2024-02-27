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
        Schema::create('shs_advisers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('shs_advisers_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('shs_advisers_sem_id_foreign');
            $table->unsignedBigInteger('teacher_id')->nullable()->index('shs_advisers_teacher_id_foreign');
            $table->unsignedBigInteger('strand_id')->nullable()->index('shs_advisers_strand_id_foreign');
            $table->unsignedBigInteger('yr_lvl_id')->nullable()->index('shs_advisers_yr_lvl_id_foreign');
            $table->unsignedBigInteger('section_id')->nullable()->index('shs_advisers_section_id_foreign');
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
        Schema::dropIfExists('shs_advisers');
    }
};
