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
        Schema::table('shs_student_miscellaneouses', function (Blueprint $table) {
            $table->foreign(['misc_id'])->references(['id'])->on('shs_miscellaneouses')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_id'])->references(['id'])->on('shs_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_program_id'])->references(['id'])->on('shs_student_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['strand_misc_id'])->references(['id'])->on('shs_strand_miscellaneouses')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('shs_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
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
        Schema::table('shs_student_miscellaneouses', function (Blueprint $table) {
            $table->dropForeign('shs_student_miscellaneouses_misc_id_foreign');
            $table->dropForeign('shs_student_miscellaneouses_std_id_foreign');
            $table->dropForeign('shs_student_miscellaneouses_std_program_id_foreign');
            $table->dropForeign('shs_student_miscellaneouses_strand_misc_id_foreign');
            $table->dropForeign('shs_student_miscellaneouses_sy_id_foreign');
            $table->dropForeign('shs_student_miscellaneouses_user_id_foreign');
        });
    }
};
