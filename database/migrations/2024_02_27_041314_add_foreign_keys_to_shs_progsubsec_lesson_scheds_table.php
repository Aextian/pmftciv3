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
        Schema::table('shs_progsubsec_lesson_scheds', function (Blueprint $table) {
            $table->foreign(['tpssl_id'])->references(['id'])->on('shs_teacher_progsubsec_lessons')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_progsubsec_lesson_scheds', function (Blueprint $table) {
            $table->dropForeign('shs_progsubsec_lesson_scheds_tpssl_id_foreign');
        });
    }
};
