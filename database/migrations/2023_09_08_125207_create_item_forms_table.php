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
        Schema::create('item_forms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('item_id')->unsigned();
            $table->String('description');
            $table->String('status');
            $table->mediumText('image');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_forms');
    }
};
