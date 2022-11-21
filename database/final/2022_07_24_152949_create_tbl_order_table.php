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
        Schema::create('tbl_order', function (Blueprint $table) {
            $table->id();
            $table->string('ordered_date');
            $table->string('required_date');
            $table->string('customer');
            $table->string('delivery_address');
            $table->string('telephone');
            $table->string('fax');
            $table->string('contact_person');
            $table->string('order_number');
            $table->string('door_design');
            $table->string('edge_profile');
            $table->string('door_color');
            $table->string('pvc_edging');
            $table->string('cabinet_type');
            $table->string('kiks_rail_type');
            $table->string('door_type');
            $table->string('drawer_type');
            $table->string('hinge_type');
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
        Schema::dropIfExists('tbl_order');
    }
};
