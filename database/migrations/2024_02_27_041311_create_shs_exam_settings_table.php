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
        Schema::create('shs_exam_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('shs_exam_settings_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('shs_exam_settings_sem_id_foreign');
            $table->unsignedBigInteger('quarter_id')->nullable()->index('shs_exam_settings_quarter_id_foreign');
            $table->integer('no_of_items')->default(0);
            $table->integer('easy')->default(0);
            $table->integer('easy_sec')->default(0);
            $table->integer('moderate')->default(0);
            $table->integer('mode_sec')->default(0);
            $table->integer('hard')->default(0);
            $table->integer('hard_sec')->default(0);
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
        Schema::dropIfExists('shs_exam_settings');
    }
};
