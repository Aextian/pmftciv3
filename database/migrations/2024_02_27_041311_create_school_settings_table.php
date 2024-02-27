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
        Schema::create('school_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('short_name')->nullable();
            $table->string('email')->nullable();
            $table->string('tel_no')->nullable();
            $table->string('cel_no')->nullable();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('fb_page')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('footer')->nullable();
            $table->string('footer_logo')->nullable();
            $table->integer('has_college')->default(1);
            $table->integer('has_shs')->default(1);
            $table->integer('has_jhs')->default(1);
            $table->string('college_school_id')->nullable();
            $table->string('shs_school_id')->nullable();
            $table->string('jhs_school_id')->nullable();
            $table->string('college_id_prefix')->nullable();
            $table->integer('college_id_count')->nullable();
            $table->string('college_id_suffix')->nullable();
            $table->string('shs_id_prefix')->nullable();
            $table->integer('shs_id_count')->nullable();
            $table->string('shs_id_suffix')->nullable();
            $table->string('jhs_id_prefix')->nullable();
            $table->integer('jhs_id_count')->nullable();
            $table->string('jhs_id_suffix')->nullable();
            $table->integer('college_is_enrollment')->default(0);
            $table->unsignedBigInteger('college_enrollment_schoolyear')->nullable()->index('school_settings_school_year_id_foreign');
            $table->unsignedBigInteger('college_enrollment_semester')->nullable()->index('school_settings_semester_id_foreign');
            $table->string('college_exam_type', 191)->nullable();
            $table->string('shs_exam_type', 191)->nullable();
            $table->string('theme_color')->nullable();
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
        Schema::dropIfExists('school_settings');
    }
};
