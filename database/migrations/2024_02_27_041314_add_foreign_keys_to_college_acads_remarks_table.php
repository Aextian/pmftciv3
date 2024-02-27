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
        Schema::table('college_acads_remarks', function (Blueprint $table) {
            $table->foreign(['acads_user_id'])->references(['id'])->on('admins')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('college_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_id'])->references(['id'])->on('college_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
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
        Schema::table('college_acads_remarks', function (Blueprint $table) {
            $table->dropForeign('college_acads_remarks_acads_user_id_foreign');
            $table->dropForeign('college_acads_remarks_sem_id_foreign');
            $table->dropForeign('college_acads_remarks_std_id_foreign');
            $table->dropForeign('college_acads_remarks_sy_id_foreign');
        });
    }
};
