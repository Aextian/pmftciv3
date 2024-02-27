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
        Schema::create('cancelled_incomes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('income_id');
            $table->integer('encoder_id');
            $table->string('description');
            $table->decimal('amount', 20)->default(0);
            $table->string('name')->nullable();
            $table->string('ar_number')->nullable();
            $table->string('or_number')->nullable();
            $table->date('date_encoded');
            $table->integer('cancelled_by');
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
        Schema::dropIfExists('cancelled_incomes');
    }
};
