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
        Schema::table('event_votings', function (Blueprint $table) {
            $table->foreign(['participant_id'])->references(['id'])->on('event_category_participants')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_votings', function (Blueprint $table) {
            $table->dropForeign('event_votings_participant_id_foreign');
        });
    }
};
