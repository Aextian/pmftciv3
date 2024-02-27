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
        Schema::create('college_miscellaneouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sem_id')->nullable()->index('college_miscellaneouses_sem_id_foreign');
            $table->unsignedBigInteger('program_id')->nullable()->index('college_miscellaneouses_program_id_foreign');
            $table->unsignedBigInteger('yr_lvl_id')->nullable()->index('college_miscellaneouses_yr_lvl_id_foreign');
            $table->string('name');
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
        Schema::dropIfExists('college_miscellaneouses');
    }
};
