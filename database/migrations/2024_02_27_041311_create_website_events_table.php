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
        Schema::create('website_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('location')->nullable();
            $table->string('image');
            $table->dateTime('date')->nullable();
            $table->dateTime('end_of_event')->nullable();
            $table->longText('description');
            $table->boolean('is_featured')->nullable()->default(false);
            $table->string('slug');
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
        Schema::dropIfExists('website_events');
    }
};
