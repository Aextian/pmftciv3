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
        Schema::table('college_other_bills', function (Blueprint $table) {
            $table->foreign(['encoded_by'])->references(['id'])->on('admins')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['paid_by'])->references(['id'])->on('admins')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('college_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_prog_id'])->references(['id'])->on('college_student_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('college_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_other_bills', function (Blueprint $table) {
            $table->dropForeign('college_other_bills_encoded_by_foreign');
            $table->dropForeign('college_other_bills_paid_by_foreign');
            $table->dropForeign('college_other_bills_sem_id_foreign');
            $table->dropForeign('college_other_bills_std_prog_id_foreign');
            $table->dropForeign('college_other_bills_sy_id_foreign');
        });
    }
};
