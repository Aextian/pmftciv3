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
        Schema::create('school_incomes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('encoder_id')->nullable()->index('school_incomes_encoder_id_foreign');
            $table->string('description');
            $table->decimal('amount', 20)->default(0);
            $table->string('name')->nullable();
            $table->string('ar_number')->nullable();
            $table->string('or_number')->nullable();
            $table->date('date_encoded');
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
        Schema::dropIfExists('school_incomes');
    }
};
