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
        Schema::create('tbl_painted_door_order_content', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number');
            $table->string('user_id');
            $table->string('category');
            $table->string('finish');
            $table->string('style');
            $table->string('material');
            $table->string('colour');
            $table->string('finish_first');
            $table->string('finish_second');
            $table->string('finish_third');
            $table->string('finish_fourth');
            $table->string('finish_fifth');
            $table->string('finish_sixth');
            $table->string('dimension_first');
            $table->string('dimension_second');
            $table->string('dimension_third');
            $table->string('dimension_fourth');
            $table->string('hardware_first');
            $table->string('hardware_second');
            $table->string('hardware_third');
            $table->string('hardware_fourth');
            $table->string('hardware_fifth');
            $table->string('total_amount');
            $table->string('comment');
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
        Schema::dropIfExists('tbl_painted_door_order_content');
    }
};
