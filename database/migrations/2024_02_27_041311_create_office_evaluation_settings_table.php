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
        Schema::create('office_evaluation_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('to_eval_date_start')->nullable();
            $table->date('to_eval_date_end')->nullable();
            $table->date('so_eval_date_start')->nullable();
            $table->date('so_eval_date_end')->nullable();
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
        Schema::dropIfExists('office_evaluation_settings');
    }
};
