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
        Schema::create('college_tpss_assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tpss_id')->nullable()->index('college_tpss_assignments_tpss_id_foreign');
            $table->unsignedBigInteger('gp_id')->nullable()->index('college_tpss_assignments_gp_id_foreign');
            $table->string('title');
            $table->integer('ass_points');
            $table->longText('content');
            $table->date('start_date');
            $table->date('due_date');
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
        Schema::dropIfExists('college_tpss_assignments');
    }
};
