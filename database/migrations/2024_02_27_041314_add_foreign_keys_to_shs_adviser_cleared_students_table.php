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
        Schema::table('shs_adviser_cleared_students', function (Blueprint $table) {
            $table->foreign(['adviser_user_id'])->references(['id'])->on('teachers')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sem_id'])->references(['id'])->on('shs_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['std_id'])->references(['id'])->on('shs_students')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['sy_id'])->references(['id'])->on('shs_school_years')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_adviser_cleared_students', function (Blueprint $table) {
            $table->dropForeign('shs_adviser_cleared_students_adviser_user_id_foreign');
            $table->dropForeign('shs_adviser_cleared_students_sem_id_foreign');
            $table->dropForeign('shs_adviser_cleared_students_std_id_foreign');
            $table->dropForeign('shs_adviser_cleared_students_sy_id_foreign');
        });
    }
};
