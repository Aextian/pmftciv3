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
        Schema::create('college_student_lesson_mac_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('std_id')->nullable()->index('college_student_lesson_mac_addresses_std_id_foreign');
            $table->unsignedBigInteger('lesson_id')->nullable()->index('college_student_lesson_mac_addresses_lesson_id_foreign');
            $table->unsignedBigInteger('lesson_sched_id')->nullable()->index('college_student_lesson_mac_addresses_lesson_sched_id_foreign');
            $table->string('mac')->nullable();
            $table->string('device')->nullable();
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
        Schema::dropIfExists('college_student_lesson_mac_addresses');
    }
};
