

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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->mediumText('image');
<<<<<<<< HEAD:database/migrations/2023_09_08_125105_create_items_table.php
========
          
>>>>>>>> 2ae3c3e7918def008714ecfddc8f0964c9f3c1eb:database/migrations/2023_09_08_133804_create_items_table.php
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
        Schema::dropIfExists('items');
    }
};
