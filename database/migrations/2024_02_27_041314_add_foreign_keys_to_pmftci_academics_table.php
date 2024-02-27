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
        Schema::table('pmftci_academics', function (Blueprint $table) {
            $table->foreign(['academics'])->references(['id'])->on('pmftci_academic_categories')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pmftci_academics', function (Blueprint $table) {
            $table->dropForeign('pmftci_academics_academics_foreign');
        });
    }
};
