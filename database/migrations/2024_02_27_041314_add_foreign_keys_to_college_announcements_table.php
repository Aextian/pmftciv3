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
        Schema::table('college_announcements', function (Blueprint $table) {
            $table->foreign(['sem_id'])->references(['id'])->on('college_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('college_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['to_program_id'])->references(['id'])->on('college_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['to_yrlvl_id'])->references(['id'])->on('college_year_levels')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['user_id'])->references(['id'])->on('admins')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_announcements', function (Blueprint $table) {
            $table->dropForeign('college_announcements_sem_id_foreign');
            $table->dropForeign('college_announcements_sy_id_foreign');
            $table->dropForeign('college_announcements_to_program_id_foreign');
            $table->dropForeign('college_announcements_to_yrlvl_id_foreign');
            $table->dropForeign('college_announcements_user_id_foreign');
        });
    }
};
