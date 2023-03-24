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
        Schema::create('item_lists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("Item")->nullable(false);
            $table->string("Title")->nullable(false);
            $table->integer("Renewable")->default(1);
            $table->string("BoundLocation")->nullable(true);
            $table->integer("RenewableMax")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_lists');
    }
};
