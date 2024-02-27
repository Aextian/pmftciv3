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
        Schema::create('college_student_bill_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_student_bill_payments_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_student_bill_payments_sem_id_foreign');
            $table->unsignedBigInteger('std_program_id')->nullable()->index('college_student_bill_payments_std_program_id_foreign');
            $table->unsignedBigInteger('std_id')->nullable()->index('college_student_bill_payments_std_id_foreign');
            $table->unsignedBigInteger('user_id')->nullable()->index('college_student_bill_payments_user_id_foreign');
            $table->unsignedBigInteger('encoder_id')->nullable()->index('college_student_bill_payments_encoder_id_foreign');
            $table->string('description');
            $table->string('or_number')->nullable();
            $table->decimal('amount', 20)->default(0);
            $table->integer('is_registration')->default(0);
            $table->integer('is_print')->default(0);
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
        Schema::dropIfExists('college_student_bill_payments');
    }
};
