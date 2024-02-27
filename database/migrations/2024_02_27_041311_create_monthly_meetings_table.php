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
        Schema::create('monthly_meetings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('meeting_code');
            $table->date('meeting_date');
            $table->enum('category', ['all', 'college', 'shs'])->default('all');
            $table->longText('content');
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
        Schema::dropIfExists('monthly_meetings');
    }
};
