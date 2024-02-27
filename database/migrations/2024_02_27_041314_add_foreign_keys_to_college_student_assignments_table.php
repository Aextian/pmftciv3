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
        Schema::table('college_student_assignments', function (Blueprint $table) {
            $table->foreign(['assignment_id'])->references(['id'])->on('college_tpss_assignments')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_prog_id'])->references(['id'])->on('college_student_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['tpss_id'])->references(['id'])->on('college_teacher_progsubsecs')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_student_assignments', function (Blueprint $table) {
            $table->dropForeign('college_student_assignments_assignment_id_foreign');
            $table->dropForeign('college_student_assignments_std_prog_id_foreign');
            $table->dropForeign('college_student_assignments_tpss_id_foreign');
        });
    }
};
