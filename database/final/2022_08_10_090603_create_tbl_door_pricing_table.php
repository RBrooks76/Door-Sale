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
        Schema::create('tbl_door_pricing', function (Blueprint $table) {
            $table->id();
            $table->string('tag');
            $table->string('edging');
            $table->string('edge_mould');
            $table->string('type');
            $table->string('doors');
            $table->string('undercoat');
            $table->string('gloss');
            $table->string('semi_gloss');
            $table->string('satin');
            $table->string('textured');
            $table->string('matt');
            $table->string('raw');
            $table->string('other');
            $table->string('ord_tag');
            $table->string('ord_material_tag');
            $table->string('ord_suffix');
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
        Schema::dropIfExists('tbl_door_pricing');
    }
};
