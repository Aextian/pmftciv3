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
        Schema::create('property_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cat_id')->nullable()->index('property_items_cat_id_foreign');
            $table->unsignedBigInteger('location_id')->nullable()->index('property_items_location_id_foreign');
            $table->string('item_name');
            $table->string('description')->nullable();
            $table->string('img')->nullable();
            $table->decimal('price', 20, 0)->nullable();
            $table->integer('loss')->default(0);
            $table->integer('damage')->default(0);
            $table->string('serial')->nullable();
            $table->integer('quantity')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_items');
    }
};
