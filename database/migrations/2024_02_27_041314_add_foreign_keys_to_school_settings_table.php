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
        Schema::table('school_settings', function (Blueprint $table) {
            $table->foreign(['college_enrollment_schoolyear'], 'school_settings_school_year_id_foreign')->references(['id'])->on('college_school_years')->onUpdate('NO ACTION')->onDelete('SET NULL');
            $table->foreign(['college_enrollment_semester'], 'school_settings_semester_id_foreign')->references(['id'])->on('college_semesters')->onUpdate('NO ACTION')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('school_settings', function (Blueprint $table) {
            $table->dropForeign('school_settings_school_year_id_foreign');
            $table->dropForeign('school_settings_semester_id_foreign');
        });
    }
};
