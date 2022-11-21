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
        Schema::create('tbl_price_parameters', function (Blueprint $table) {
            $table->id();
            $table->string('rebate');
            $table->string('margin_flag');
            $table->string('glass_cutout');
            $table->string('fingerpull_rate');
            $table->string('hinge_drilling_rate');
            $table->string('wastage');
            $table->string('tmould');
            $table->string('drawer_drilling_charge');
            $table->string('jpull_rate');
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
        Schema::dropIfExists('tbl_painted_door_price');
    }
};
