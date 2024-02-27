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
        Schema::table('event_category_participants', function (Blueprint $table) {
            $table->foreign(['category_id'])->references(['id'])->on('event_categories')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['event_id'])->references(['id'])->on('events')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_category_participants', function (Blueprint $table) {
            $table->dropForeign('event_category_participants_category_id_foreign');
            $table->dropForeign('event_category_participants_event_id_foreign');
        });
    }
};
