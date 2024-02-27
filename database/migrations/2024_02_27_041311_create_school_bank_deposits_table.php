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
        Schema::create('school_bank_deposits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bank_id')->nullable()->index('school_bank_deposits_bank_id_foreign');
            $table->string('reference_no')->nullable();
            $table->decimal('amount', 20)->default(0);
            $table->date('deposit_date');
            $table->enum('status', ['deposit', 'withdraw'])->default('deposit');
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
        Schema::dropIfExists('school_bank_deposits');
    }
};
