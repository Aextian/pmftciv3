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
        Schema::table('college_miscellaneouses', function (Blueprint $table) {
            $table->foreign(['program_id'])->references(['id'])->on('college_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('college_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['yr_lvl_id'])->references(['id'])->on('college_year_levels')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_miscellaneouses', function (Blueprint $table) {
            $table->dropForeign('college_miscellaneouses_program_id_foreign');
            $table->dropForeign('college_miscellaneouses_sem_id_foreign');
            $table->dropForeign('college_miscellaneouses_yr_lvl_id_foreign');
        });
    }
};
