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
        Schema::create('shs_acads_remarks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('acads_user_id')->nullable()->index('shs_acads_remarks_acads_user_id_foreign');
            $table->unsignedBigInteger('std_id')->nullable()->index('shs_acads_remarks_std_id_foreign');
            $table->unsignedBigInteger('sy_id')->nullable()->index('shs_acads_remarks_sy_id_foreign');
            $table->unsignedBigInteger('sem_id')->nullable()->index('shs_acads_remarks_sem_id_foreign');
            $table->mediumText('remarks');
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
        Schema::dropIfExists('shs_acads_remarks');
    }
};
