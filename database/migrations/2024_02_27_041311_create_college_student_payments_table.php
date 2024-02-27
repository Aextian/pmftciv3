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
        Schema::create('college_student_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('std_id')->nullable()->index('college_student_payments_std_id_foreign');
            $table->unsignedBigInteger('user_id')->nullable()->index('college_student_payments_user_id_foreign');
            $table->unsignedBigInteger('std_prog_id')->nullable()->index('college_student_payments_std_prog_id_foreign');
            $table->string('file', 191)->nullable();
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
        Schema::dropIfExists('college_student_payments');
    }
};
