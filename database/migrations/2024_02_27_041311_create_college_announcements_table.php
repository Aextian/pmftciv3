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
        Schema::create('college_announcements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable()->index('college_announcements_user_id_foreign');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_announcements_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_announcements_sem_id_foreign');
            $table->string('title')->nullable();
            $table->mediumText('message')->nullable();
            $table->integer('is_active')->default(1);
            $table->unsignedBigInteger('to_program_id')->nullable()->index('college_announcements_to_program_id_foreign');
            $table->unsignedBigInteger('to_yrlvl_id')->nullable()->index('college_announcements_to_yrlvl_id_foreign');
            $table->enum('enrollment_status', ['all', 'pending', 'evaluated', 'billed', 'enrolled'])->default('pending');
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
        Schema::dropIfExists('college_announcements');
    }
};
