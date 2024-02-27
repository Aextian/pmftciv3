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
        Schema::table('shs_quarters', function (Blueprint $table) {
            $table->foreign(['sem_id'])->references(['id'])->on('shs_semesters')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_quarters', function (Blueprint $table) {
            $table->dropForeign('shs_quarters_sem_id_foreign');
        });
    }
};
