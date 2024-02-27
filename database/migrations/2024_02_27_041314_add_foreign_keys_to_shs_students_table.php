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
        Schema::table('shs_students', function (Blueprint $table) {
            $table->foreign(['user_id'])->references(['id'])->on('senior_highs')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shs_students', function (Blueprint $table) {
            $table->dropForeign('shs_students_user_id_foreign');
        });
    }
};
