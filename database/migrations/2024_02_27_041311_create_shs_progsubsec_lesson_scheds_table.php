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
        Schema::create('shs_progsubsec_lesson_scheds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tpssl_id')->nullable()->index('shs_progsubsec_lesson_scheds_tpssl_id_foreign');
            $table->date('lesson_date');
            $table->time('from_time')->nullable();
            $table->time('to_time')->nullable();
            $table->string('day');
            $table->mediumText('reason')->nullable();
            $table->integer('is_viewed')->default(0);
            $table->integer('is_active')->nullable();
            $table->integer('is_dismissed')->default(0);
            $table->integer('recitation_status')->default(0);
            $table->string('cp_type')->nullable();
            $table->integer('attendance_status')->default(1);
            $table->dateTime('activate_discussion')->nullable();
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
        Schema::dropIfExists('shs_progsubsec_lesson_scheds');
    }
};
