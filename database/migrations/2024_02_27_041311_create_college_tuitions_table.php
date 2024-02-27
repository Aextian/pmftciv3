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
        Schema::create('college_tuitions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_tuitions_sem_id_foreign');
            $table->unsignedBigInteger('program_id')->nullable()->index('college_tuitions_program_id_foreign');
            $table->unsignedBigInteger('yr_lvl_id')->nullable()->index('college_tuitions_yr_lvl_id_foreign');
            $table->decimal('tuition', 20)->default(0);
            $table->decimal('per_unit', 20)->default(0);
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
        Schema::dropIfExists('college_tuitions');
    }
};
