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
        Schema::table('college_student_requirements', function (Blueprint $table) {
            $table->foreign(['requirement_id'])->references(['id'])->on('college_requirements')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_id'])->references(['id'])->on('college_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_prog_id'])->references(['id'])->on('college_student_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
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
        Schema::table('college_student_requirements', function (Blueprint $table) {
            $table->dropForeign('college_student_requirements_requirement_id_foreign');
            $table->dropForeign('college_student_requirements_std_id_foreign');
            $table->dropForeign('college_student_requirements_std_prog_id_foreign');
            $table->dropForeign('college_student_requirements_user_id_foreign');
        });
    }
};
