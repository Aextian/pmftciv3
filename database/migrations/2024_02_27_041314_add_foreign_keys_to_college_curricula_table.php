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
        Schema::table('college_curricula', function (Blueprint $table) {
            $table->foreign(['program_id'], 'college_curriculum_program_id_foreign')->references(['id'])->on('college_programs')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_curricula', function (Blueprint $table) {
            $table->dropForeign('college_curriculum_program_id_foreign');
        });
    }
};
