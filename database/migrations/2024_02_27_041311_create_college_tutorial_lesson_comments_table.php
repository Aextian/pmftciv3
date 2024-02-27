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
        Schema::create('college_tutorial_lesson_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('t_user_id')->nullable()->index('college_tutorial_lesson_comments_t_user_id_foreign');
            $table->unsignedBigInteger('s_user_id')->nullable()->index('college_tutorial_lesson_comments_s_user_id_foreign');
            $table->unsignedBigInteger('lesson_id')->nullable()->index('college_tutorial_lesson_comments_lesson_id_foreign');
            $table->integer('parent_id')->nullable();
            $table->mediumText('body');
            $table->longText('mentioned_std_id')->nullable();
            $table->integer('reply_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('college_tutorial_lesson_comments');
    }
};
