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
        Schema::table('teacher_property_charges', function (Blueprint $table) {
            $table->foreign(['teacher_borrowers'])->references(['id'])->on('teacher_borrowers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teacher_property_charges', function (Blueprint $table) {
            $table->dropForeign('teacher_property_charges_teacher_borrowers_foreign');
        });
    }
};
