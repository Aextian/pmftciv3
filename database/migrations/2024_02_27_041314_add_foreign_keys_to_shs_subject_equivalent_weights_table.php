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
        Schema::table('shs_subject_equivalent_weights', function (Blueprint $table) {
            $table->foreign(['sem_id'])->references(['id'])->on('shs_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['subject_id'])->references(['id'])->on('shs_subjects')->onUpdate('NO ACTION')->onDelete('CASCADE');
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
        Schema::table('shs_subject_equivalent_weights', function (Blueprint $table) {
            $table->dropForeign('shs_subject_equivalent_weights_sem_id_foreign');
            $table->dropForeign('shs_subject_equivalent_weights_subject_id_foreign');
            $table->dropForeign('shs_subject_equivalent_weights_sy_id_foreign');
        });
    }
};
