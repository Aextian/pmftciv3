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
        Schema::create('shs_strand_miscellaneouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('strand_id')->nullable()->index('shs_strand_miscellaneouses_strand_id_foreign');
            $table->unsignedBigInteger('yr_lvl_id')->nullable()->index('shs_strand_miscellaneouses_yr_lvl_id_foreign');
            $table->unsignedBigInteger('misc_id')->nullable()->index('shs_strand_miscellaneouses_misc_id_foreign');
            $table->decimal('amount', 20)->default(0);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('shs_strand_miscellaneouses');
    }
};
