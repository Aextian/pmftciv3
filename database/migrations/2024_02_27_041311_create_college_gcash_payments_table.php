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
        Schema::create('college_gcash_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('college_gcash_payments_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_gcash_payments_sem_id_foreign');
            $table->unsignedBigInteger('std_prog_id')->nullable()->index('college_gcash_payments_std_prog_id_foreign');
            $table->string('description')->nullable();
            $table->string('reference_no');
            $table->string('otherbill_id')->nullable();
            $table->decimal('otherbill_recommended', 20)->default(0);
            $table->boolean('is_both')->default(false);
            $table->decimal('amount', 20)->default(0);
            $table->decimal('charge', 20)->default(0);
            $table->enum('status', ['pending', 'verified', 'approved', 'decline'])->default('pending');
            $table->unsignedBigInteger('verify_by')->nullable()->index('college_gcash_payments_verify_by_foreign');
            $table->unsignedBigInteger('approved_by')->nullable()->index('college_gcash_payments_approved_by_foreign');
            $table->unsignedBigInteger('declined_by')->nullable()->index('college_gcash_payments_declined_by_foreign');
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
        Schema::dropIfExists('college_gcash_payments');
    }
};
