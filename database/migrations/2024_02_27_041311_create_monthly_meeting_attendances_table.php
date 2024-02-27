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
        Schema::create('monthly_meeting_attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('meeting_id')->nullable()->index('monthly_meeting_attendances_meeting_id_foreign');
            $table->unsignedBigInteger('college_user_id')->nullable()->index('monthly_meeting_attendances_college_user_id_foreign');
            $table->unsignedBigInteger('shs_user_id')->nullable()->index('monthly_meeting_attendances_shs_user_id_foreign');
            $table->unsignedBigInteger('college_std_id')->nullable()->index('monthly_meeting_attendances_college_std_id_foreign');
            $table->unsignedBigInteger('shs_std_id')->nullable()->index('monthly_meeting_attendances_shs_std_id_foreign');
            $table->unsignedBigInteger('std_program_id')->nullable()->index('monthly_meeting_attendances_std_program_id_foreign');
            $table->unsignedBigInteger('std_strand_id')->nullable()->index('monthly_meeting_attendances_std_strand_id_foreign');
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
        Schema::dropIfExists('monthly_meeting_attendances');
    }
};
