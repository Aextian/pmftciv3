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
        Schema::create('event_category_participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('event_id')->nullable()->index('event_category_participants_event_id_foreign');
            $table->unsignedBigInteger('category_id')->nullable()->index('event_category_participants_category_id_foreign');
            $table->string('name');
            $table->enum('department', ['college', 'shs'])->nullable();
            $table->longText('tagline')->nullable();
            $table->string('photo');
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
        Schema::dropIfExists('event_category_participants');
    }
};
