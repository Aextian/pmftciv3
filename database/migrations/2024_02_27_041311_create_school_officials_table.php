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
        Schema::create('school_officials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable()->index('school_officials_user_id_foreign');
            $table->unsignedBigInteger('c_sy_id')->nullable()->index('school_officials_c_sy_id_foreign');
            $table->unsignedBigInteger('shs_sy_id')->nullable()->index('school_officials_shs_sy_id_foreign');
            $table->string('name');
            $table->string('designation');
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
        Schema::dropIfExists('school_officials');
    }
};
