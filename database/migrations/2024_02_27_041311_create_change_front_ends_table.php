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
        Schema::create('change_front_ends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('change')->nullable()->default(false);
            $table->boolean('calendar')->nullable();
            $table->boolean('event')->nullable();
            $table->boolean('news')->nullable();
            $table->boolean('teacher')->nullable();
            $table->boolean('description')->nullable();
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
        Schema::dropIfExists('change_front_ends');
    }
};
