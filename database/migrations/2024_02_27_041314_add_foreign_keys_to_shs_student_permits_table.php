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
        Schema::table('shs_student_permits', function (Blueprint $table) {
            $table->foreign(['quarter_id'])->references(['id'])->on('shs_quarters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('shs_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_prog_id'])->references(['id'])->on('shs_student_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
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
        Schema::table('shs_student_permits', function (Blueprint $table) {
            $table->dropForeign('shs_student_permits_quarter_id_foreign');
            $table->dropForeign('shs_student_permits_sem_id_foreign');
            $table->dropForeign('shs_student_permits_std_prog_id_foreign');
            $table->dropForeign('shs_student_permits_sy_id_foreign');
        });
    }
};
