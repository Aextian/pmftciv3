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
        Schema::table('shs_intrams_tshirt_sizes', function (Blueprint $table) {
            $table->foreign(['std_prog_id'])->references(['id'])->on('shs_student_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_intrams_tshirt_sizes', function (Blueprint $table) {
            $table->dropForeign('shs_intrams_tshirt_sizes_std_prog_id_foreign');
        });
    }
};
