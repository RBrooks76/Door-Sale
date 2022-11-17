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
        Schema::create('tbl_roller_door_pricing', function (Blueprint $table) {
            $table->id();
            $table->string('width');
            $table->string('height');
            $table->string('raw_MDF');
            $table->string('painted_MDF');
            $table->string('melamine');
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
        Schema::dropIfExists('tbl_roller_door_pricing');
    }
};
