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
        Schema::create('college_curriculum_programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_curriculum_programs_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_curriculum_programs_sem_id_foreign');
            $table->unsignedBigInteger('yl_id')->nullable()->index('college_curriculum_programs_yl_id_foreign');
            $table->unsignedBigInteger('curr_id')->nullable()->index('college_curriculum_programs_curr_id_foreign');
            $table->unsignedBigInteger('program_id')->nullable()->index('college_curriculum_programs_program_id_foreign');
            $table->string('note')->nullable();
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
        Schema::dropIfExists('college_curriculum_programs');
    }
};
