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
        Schema::table('shs_exam_settings', function (Blueprint $table) {
            $table->foreign(['quarter_id'])->references(['id'])->on('shs_quarters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('shs_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('shs_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_exam_settings', function (Blueprint $table) {
            $table->dropForeign('shs_exam_settings_quarter_id_foreign');
            $table->dropForeign('shs_exam_settings_sem_id_foreign');
            $table->dropForeign('shs_exam_settings_sy_id_foreign');
        });
    }
};
