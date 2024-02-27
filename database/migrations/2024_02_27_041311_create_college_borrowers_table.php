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
        Schema::create('college_borrowers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('item_id')->nullable()->index('college_borrowers_item_id_foreign');
            $table->unsignedBigInteger('std_prog_id')->nullable()->index('college_borrowers_std_prog_id_foreign');
            $table->unsignedBigInteger('user_id')->nullable()->index('college_borrowers_user_id_foreign');
            $table->integer('quantity')->nullable();
            $table->integer('good_item')->nullable();
            $table->integer('damage_item')->nullable();
            $table->integer('loss_item')->nullable();
            $table->integer('add_to_borrow')->nullable();
            $table->integer('serial')->nullable();
            $table->decimal('items_charge', 20, 0);
            $table->string('date_borrowed')->nullable();
            $table->string('date_returned')->nullable();
            $table->enum('status', ['pending', 'verified', 'approved', 'declined'])->default('pending');
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
        Schema::dropIfExists('college_borrowers');
    }
};
