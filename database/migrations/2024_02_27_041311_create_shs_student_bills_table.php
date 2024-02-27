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
        Schema::create('shs_student_bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('shs_student_bills_sy_id_foreign');
            $table->unsignedBigInteger('std_program_id')->nullable()->index('shs_student_bills_std_program_id_foreign');
            $table->unsignedBigInteger('std_id')->nullable()->index('shs_student_bills_std_id_foreign');
            $table->unsignedBigInteger('user_id')->nullable()->index('shs_student_bills_user_id_foreign');
            $table->unsignedBigInteger('encoder_id')->nullable()->index('shs_student_bills_encoder_id_foreign');
            $table->string('description');
            $table->decimal('amount', 20)->default(0);
            $table->string('type')->nullable()->default('is_bill');
            $table->integer('is_default')->default(0);
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
        Schema::dropIfExists('shs_student_bills');
    }
};
