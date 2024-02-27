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
        Schema::table('property_items', function (Blueprint $table) {
            $table->foreign(['cat_id'])->references(['id'])->on('property_categories')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['location_id'])->references(['id'])->on('property_locations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property_items', function (Blueprint $table) {
            $table->dropForeign('property_items_cat_id_foreign');
            $table->dropForeign('property_items_location_id_foreign');
        });
    }
};
