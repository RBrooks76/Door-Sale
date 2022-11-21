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
        Schema::create('tbl_painted_door_order_title', function (Blueprint $table) {
            $table->id();
            $table->string("serial_number");
            $table->string("user_id");
            $table->string("ordered_date");
            $table->string("required_date");
            $table->string("customer");
            $table->string("company");
            $table->string("delivery_address");
            $table->string("delivery_state");
            $table->string("job_ref");
            $table->string("mobile");
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
        Schema::dropIfExists('tbl_painted_door_order_title');
    }
};
