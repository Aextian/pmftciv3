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
        Schema::create('admin_lesson_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category');
            $table->integer('on_time')->default(0);
            $table->integer('late')->default(0);
            $table->integer('behavior')->default(0);
            $table->integer('recitation')->default(0);
            $table->integer('note')->default(0);
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
        Schema::dropIfExists('admin_lesson_settings');
    }
};
