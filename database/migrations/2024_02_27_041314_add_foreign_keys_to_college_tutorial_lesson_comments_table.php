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
        Schema::table('college_tutorial_lesson_comments', function (Blueprint $table) {
            $table->foreign(['lesson_id'])->references(['id'])->on('college_teacher_tutorial_lessons')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['s_user_id'])->references(['id'])->on('colleges')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['t_user_id'])->references(['id'])->on('teachers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_tutorial_lesson_comments', function (Blueprint $table) {
            $table->dropForeign('college_tutorial_lesson_comments_lesson_id_foreign');
            $table->dropForeign('college_tutorial_lesson_comments_s_user_id_foreign');
            $table->dropForeign('college_tutorial_lesson_comments_t_user_id_foreign');
        });
    }
};
