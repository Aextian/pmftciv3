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
        Schema::table('teacher_office_evaluations', function (Blueprint $table) {
            $table->foreign(['c_sem_id'])->references(['id'])->on('college_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['c_sy_id'])->references(['id'])->on('college_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['shs_sem_id'])->references(['id'])->on('shs_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['shs_sy_id'])->references(['id'])->on('shs_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['teacher_id'])->references(['id'])->on('teachers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teacher_office_evaluations', function (Blueprint $table) {
            $table->dropForeign('teacher_office_evaluations_c_sem_id_foreign');
            $table->dropForeign('teacher_office_evaluations_c_sy_id_foreign');
            $table->dropForeign('teacher_office_evaluations_shs_sem_id_foreign');
            $table->dropForeign('teacher_office_evaluations_shs_sy_id_foreign');
            $table->dropForeign('teacher_office_evaluations_teacher_id_foreign');
        });
    }
};
