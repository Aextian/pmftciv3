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
        Schema::table('shs_office_evaluations', function (Blueprint $table) {
            $table->foreign(['shs_sem_id'])->references(['id'])->on('shs_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['shs_sy_id'])->references(['id'])->on('shs_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['user_id'])->references(['id'])->on('senior_highs')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_office_evaluations', function (Blueprint $table) {
            $table->dropForeign('shs_office_evaluations_shs_sem_id_foreign');
            $table->dropForeign('shs_office_evaluations_shs_sy_id_foreign');
            $table->dropForeign('shs_office_evaluations_user_id_foreign');
        });
    }
};
