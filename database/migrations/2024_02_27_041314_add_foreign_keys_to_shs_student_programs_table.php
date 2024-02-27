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
        Schema::table('shs_student_programs', function (Blueprint $table) {
            $table->foreign(['scholarship_id'])->references(['id'])->on('shs_scholarships')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['section_id'])->references(['id'])->on('shs_sections')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_id'])->references(['id'])->on('shs_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['strand_id'])->references(['id'])->on('shs_strands')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('shs_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['user_id'])->references(['id'])->on('senior_highs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['yr_lvl_id'])->references(['id'])->on('shs_year_levels')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_student_programs', function (Blueprint $table) {
            $table->dropForeign('shs_student_programs_scholarship_id_foreign');
            $table->dropForeign('shs_student_programs_section_id_foreign');
            $table->dropForeign('shs_student_programs_std_id_foreign');
            $table->dropForeign('shs_student_programs_strand_id_foreign');
            $table->dropForeign('shs_student_programs_sy_id_foreign');
            $table->dropForeign('shs_student_programs_user_id_foreign');
            $table->dropForeign('shs_student_programs_yr_lvl_id_foreign');
        });
    }
};
