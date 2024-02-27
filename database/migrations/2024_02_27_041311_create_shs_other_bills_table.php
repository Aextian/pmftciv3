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
        Schema::create('shs_other_bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sy_id')->nullable()->index('shs_other_bills_sy_id_foreign');
            $table->unsignedBigInteger('std_prog_id')->nullable()->index('shs_other_bills_std_prog_id_foreign');
            $table->string('description')->nullable();
            $table->string('description_code')->nullable();
            $table->string('ar_no')->nullable();
            $table->decimal('amount', 20)->default(0);
            $table->enum('status', ['unpaid', 'paid', 'verified'])->default('unpaid');
            $table->unsignedBigInteger('encoded_by')->nullable()->index('shs_other_bills_encoded_by_foreign');
            $table->unsignedBigInteger('paid_by')->nullable()->index('shs_other_bills_paid_by_foreign');
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
        Schema::dropIfExists('shs_other_bills');
    }
};
