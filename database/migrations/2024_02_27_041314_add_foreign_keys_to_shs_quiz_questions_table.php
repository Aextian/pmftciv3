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
        Schema::table('shs_quiz_questions', function (Blueprint $table) {
            $table->foreign(['quiz_id'])->references(['id'])->on('shs_subject_quizzes')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_quiz_questions', function (Blueprint $table) {
            $table->dropForeign('shs_quiz_questions_quiz_id_foreign');
        });
    }
};
