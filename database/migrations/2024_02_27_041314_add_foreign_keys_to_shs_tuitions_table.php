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
        Schema::table('shs_tuitions', function (Blueprint $table) {
            $table->foreign(['strand_id'])->references(['id'])->on('shs_strands')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['yr_lvl_id'])->references(['id'])->on('shs_year_levels')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_tuitions', function (Blueprint $table) {
            $table->dropForeign('shs_tuitions_strand_id_foreign');
            $table->dropForeign('shs_tuitions_yr_lvl_id_foreign');
        });
    }
};
