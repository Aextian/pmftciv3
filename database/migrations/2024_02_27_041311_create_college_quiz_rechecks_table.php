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
        Schema::create('college_quiz_rechecks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('std_id')->nullable()->index('college_quiz_rechecks_std_id_foreign');
            $table->unsignedBigInteger('quiz_id')->nullable()->index('college_quiz_rechecks_quiz_id_foreign');
            $table->unsignedBigInteger('question_id')->nullable()->index('college_quiz_rechecks_question_id_foreign');
            $table->integer('points')->default(0);
            $table->string('type')->nullable();
            $table->mediumText('reason')->nullable();
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
        Schema::dropIfExists('college_quiz_rechecks');
    }
};
