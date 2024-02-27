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
        Schema::create('shs_subject_equivalent_weights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('shs_subject_equivalent_weights_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('shs_subject_equivalent_weights_sem_id_foreign');
            $table->unsignedBigInteger('subject_id')->nullable()->index('shs_subject_equivalent_weights_subject_id_foreign');
            $table->string('subject_type');
            $table->integer('no_of_hour');
            $table->integer('ww')->comment('Written Works');
            $table->integer('pt')->comment('Performance Task');
            $table->integer('qa')->comment('Quality Assessment');
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
        Schema::dropIfExists('shs_subject_equivalent_weights');
    }
};
