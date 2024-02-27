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
        Schema::table('monthly_meeting_attendances', function (Blueprint $table) {
            $table->foreign(['college_std_id'])->references(['id'])->on('college_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['college_user_id'])->references(['id'])->on('colleges')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['meeting_id'])->references(['id'])->on('monthly_meetings')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['shs_std_id'])->references(['id'])->on('shs_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['shs_user_id'])->references(['id'])->on('senior_highs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_program_id'])->references(['id'])->on('college_student_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_strand_id'])->references(['id'])->on('shs_student_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('monthly_meeting_attendances', function (Blueprint $table) {
            $table->dropForeign('monthly_meeting_attendances_college_std_id_foreign');
            $table->dropForeign('monthly_meeting_attendances_college_user_id_foreign');
            $table->dropForeign('monthly_meeting_attendances_meeting_id_foreign');
            $table->dropForeign('monthly_meeting_attendances_shs_std_id_foreign');
            $table->dropForeign('monthly_meeting_attendances_shs_user_id_foreign');
            $table->dropForeign('monthly_meeting_attendances_std_program_id_foreign');
            $table->dropForeign('monthly_meeting_attendances_std_strand_id_foreign');
        });
    }
};
