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
        Schema::table('shs_strand_miscellaneouses', function (Blueprint $table) {
            $table->foreign(['misc_id'])->references(['id'])->on('shs_miscellaneouses')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['strand_id'])->references(['id'])->on('shs_strands')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['yr_lvl_id'], 'shs_strand_miscellaneouses_yrlvl_id_foreign')->references(['id'])->on('shs_year_levels')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_strand_miscellaneouses', function (Blueprint $table) {
            $table->dropForeign('shs_strand_miscellaneouses_misc_id_foreign');
            $table->dropForeign('shs_strand_miscellaneouses_strand_id_foreign');
            $table->dropForeign('shs_strand_miscellaneouses_yrlvl_id_foreign');
        });
    }
};
