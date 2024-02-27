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
        Schema::table('college_student_bills', function (Blueprint $table) {
            $table->foreign(['encoder_id'])->references(['id'])->on('admins')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('college_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_id'])->references(['id'])->on('college_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_program_id'])->references(['id'])->on('college_student_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('college_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['user_id'])->references(['id'])->on('colleges')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_student_bills', function (Blueprint $table) {
            $table->dropForeign('college_student_bills_encoder_id_foreign');
            $table->dropForeign('college_student_bills_sem_id_foreign');
            $table->dropForeign('college_student_bills_std_id_foreign');
            $table->dropForeign('college_student_bills_std_program_id_foreign');
            $table->dropForeign('college_student_bills_sy_id_foreign');
            $table->dropForeign('college_student_bills_user_id_foreign');
        });
    }
};
