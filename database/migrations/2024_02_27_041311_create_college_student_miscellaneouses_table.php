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
        Schema::create('college_student_miscellaneouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_student_miscellaneouses_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_student_miscellaneouses_sem_id_foreign');
            $table->unsignedBigInteger('std_program_id')->nullable()->index('college_student_miscellaneouses_std_program_id_foreign');
            $table->unsignedBigInteger('std_id')->nullable()->index('college_student_miscellaneouses_std_id_foreign');
            $table->unsignedBigInteger('user_id')->nullable()->index('college_student_miscellaneouses_user_id_foreign');
            $table->unsignedBigInteger('misc_id')->nullable()->index('college_student_miscellaneouses_misc_id_foreign');
            $table->string('description');
            $table->decimal('amount', 20)->default(0);
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
        Schema::dropIfExists('college_student_miscellaneouses');
    }
};
