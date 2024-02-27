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
        Schema::table('teacher_borrowers', function (Blueprint $table) {
            $table->foreign(['item_id'])->references(['id'])->on('property_items')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['user_id'])->references(['id'])->on('teachers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teacher_borrowers', function (Blueprint $table) {
            $table->dropForeign('teacher_borrowers_item_id_foreign');
            $table->dropForeign('teacher_borrowers_user_id_foreign');
        });
    }
};
